<?php

App::uses('AppModel', 'Model');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class Item extends AppModel {

    public $useTable = 'items';
    public $files = [];
    public $filtroCateogia = "";
    public $validate = array(
        'titulo' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    public $hasMany = [
        'Oferta' => [
            'className' => 'Oferta',
            'foreignKey' => 'item_id',
            'dependent' => true
        ]
    ];
    public $belongsTo = [
        'Proceso' => [
            'className' => 'Proceso',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
        'Categoria' => [
            'className' => 'Categorias.Categoria',
            'foreignKey' => 'categoria_id',
        ],
        'Subcategoria' => [
            'className' => 'Categorias.Subcategoria',
            'foreignKey' => 'subcategoria_id',
        ],
    ];

    public function afterSave($created, $options = []) {

        if ($created) {
            App::import('Vendor', 'php_image_magician');

            if (!empty($this->files)) {
                //defino la ruta
                $proceso_id = $this->data['Item']['proceso_id'];
                $item_id = $this->data['Item']['id'];
                $tmp_name = $this->data['Item']['tmp_imagen']['tmp_name'];

                if ($tmp_name) {

                    $path = WWW_ROOT . "img" . DS . "procesos" . DS . $proceso_id . DS . $item_id;

                    //creo carpeta
                    $folder = new Folder();
                    $folder->create($path, true, 0755);

                    //recorro imagenes, grabo original y thumb
                    foreach ($this->files as $key => $file) {
//                    debug($savePath);
                        if ($tmp_name == $file['Item']['tmp_imagen']['tmp_name']) {
                            $savePath = $path . DS . $file['Item']['tmp_imagen']['name'];
                            move_uploaded_file($tmp_name, $savePath);

                            $thumbPath = $path . DS . 'thumb_' . $file['Item']['tmp_imagen']['name'];
                            $img = new imageLib($savePath);
                            $img->resizeImage(300, 300);
                            $img->saveImage($thumbPath, '100');
                        }
                    }
                }
            }
//            die;
        }
    }

    public function esPropio($item_id) {
        $user_id = AuthComponent::user('id');
        $result = $this->find('first', [
            'conditions' => ['Item.user_id' => $user_id, 'Item.id' => $item_id]
        ]);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getItemsActivos($categoria_id = null) {
        $data = [];
        if ($categoria_id) {
            $this->filtroCategoria = ['Item.categoria_id' => $categoria_id];
        }

        $items = $this->find('all', [
            'conditions' => [
                'Item.estado' => 'Activo',
                $this->filtroCategoria,
            ],
            'order' => ['Proceso.fecha_fin']
        ]);

        foreach ($items as $key => $item) {
            $mejor_oferta = "";
            $data[$key]['id'] = $item['Item']['id'];
            $data[$key]['user_id'] = $item['Item']['user_id'];
            $data[$key]['nombre'] = $item['Item']['nombre'];
            $data[$key]['cantidad'] = $item['Item']['cantidad'];
            $data[$key]['unidad'] = $item['Item']['unidad'];
            $data[$key]['especificaciones'] = $item['Item']['especificaciones'];
            $data[$key]['imagen'] = $item['Item']['imagen'];
            $data[$key]['proceso_id'] = $item['Proceso']['id'];
            $data[$key]['proceso_referencia'] = $item['Proceso']['referencia'];
            $data[$key]['fecha_fin'] = $item['Proceso']['fecha_fin'];
            $data[$key]['mejor_oferta'] = $mejor_oferta;
            $data[$key]['fecha_entrega'] = $item['Proceso']['fecha_entrega'];
            $data[$key]['preferencia_pago'] = $item['Proceso']['preferencia_pago'];
            $data[$key]['requisitos_excluyentes'] = $item['Proceso']['requisitos_excluyentes'];
            $data[$key]['categoria'] = $item['Categoria']['nombre'];
            $data[$key]['subcategoria'] = $item['Subcategoria']['nombre'];
        }

        return $data;
    }

    public function getInfoCategoria($categoria_id) {
        $data = [];

        $info_categoria = $this->Categoria->find('first', [
            'conditions' => ['Categoria.id' => $categoria_id]
        ]);

        $data["nombre_cat"] = $info_categoria['Categoria']['nombre'];
        $data["icon_cat"] = $info_categoria['Categoria']['icon'];
        $data["descripcion"] = $info_categoria['Categoria']['descripcion'];

        $subcats_id = $this->find('list', [
            'fields' => ['subcategoria_id'],
            'conditions' => ['estado' => 'Activo', 'categoria_id' => $categoria_id],
            'group' => ['subcategoria_id']
        ]);

        $subcats = $this->Subcategoria->find('list', ['conditions' => ['id' => $subcats_id]]);

        $data["subcategorias"] = $subcats;
        return $data;
    }

}
