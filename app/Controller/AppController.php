<?php
App::uses('Controller', 'Controller');
App::import('Vendor', 'funciones');

class AppController extends Controller {
    
    /** Modelos que estarán disponibles en todos los controladores. */
    var $uses = array('Categorias.Categoria', 'Categorias.Subcategoria', 'Ubicacion.Provincia', 'Unidad');
    Public $phpNow;
    public $components = array(
//        'Security',
        'Flash',
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );

    protected function dd($data)
    {
        if(is_array($data) || is_object($data))
        {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            die();
        }
        echo "<br>";
        echo $data;
        echo "<br>";
    }

    public function fecha($fecha) {
        return $fecha + 1;
    }

    public function procesarFiles($data = null) {
        debug($data);
        die;
    }

    public function beforeFilter() {
        $this->phpNow = (new DateTime())->format('Y-m-d');

        // permitimos accion landing y registrar (sin login).
        $this->Auth->allow('registrar', 'landing_general');
        $this->Auth->authError = __('Para ingresar debes estar loggeado.');

        //variables de usuario disponibles en las vistas. 
        $this->set('logUserId', AuthComponent::user('id'));
        $this->set('logUserName', AuthComponent::user('username'));
        $this->set('logUserEmail', AuthComponent::user('email'));

        //estilo para formularios Bootstrap
        $formHorizontal = [
            'class' => 'form-horizontal',
            'inputDefaults' => array(
                'class' => 'form-control',
                'div' => false,
                'label' => false,
            ),
            'novalidate'
        ];
        $inputDefaults = "'inputDefaults' => array('class' => 'form-control','div' => false,'label' => false,),'novalidate'";

        //estilos para botones de acción en Tablas (elements)
        $delete = array(
            'div' => false,
            'title' => 'Eliminar',
            'class' => 'btn btn-danger fa fa-trash-alt pull-right',
            'confirm' => 'Está seguro que desea eliminar?',
        );
        $finalizar = array(
            'div' => false,
            'title' => 'Finalizar',
            'class' => 'finalizar btn btn-danger fa fa-times-circle pull-right',
            'onclick' => "return finalizar_btn(event)",
        );
        $edit = array(
            'div' => false,
            'title' => 'Editar',
            'class' => 'btn btn-info fa fa-edit pull-right',
            'type' => 'button'
        );
        $view = array(
            'div' => false,
            'title' => 'Ver',
            'class' => 'btn btn-info fa fa-search-plus pull-right',
        );
        $ofertar = array(
            'div' => false,
            'title' => 'Ofertar',
            'class' => 'btn btn-success fa fa-dollar-sign pull-right',
        );
       

        //estilos para botones de acción en Formularios
        $guardar = array(
            'div' => false,
            'label' => 'Guardar',
            'class' => 'btn btn-info pull-right m-t-5',
        );
        $buscar = array(
            'div' => false,
            'label' => 'Buscar',
            'class' => 'btn btn-info pull-right m-t-5',
        );
        $aceptar = array(
            'div' => false,
            'label' => 'Aceptar',
            'class' => 'btn btn-info pull-right m-t-5',
        );
        $cancelar = array(
            'class' => 'btn btn-info pull-right',
        );

//            debug(Router::getRequest());die;

        //variables disponibles en todas las vistas:
        $this->set('deleteBtn', $delete);
        $this->set('finalizarBtn', $finalizar);
        $this->set('editBtn', $edit);
        $this->set('viewBtn', $view);
        $this->set('ofertarBtn', $ofertar);
        $this->set('guardar', $guardar);
        $this->set('buscar', $buscar);
        $this->set('aceptar', $aceptar);
        $this->set('cancelar', $cancelar);
        $this->set('formHorizontal', $formHorizontal);
        $this->set('inputDefaults', $inputDefaults);
    }

}
