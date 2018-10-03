<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $condicionesPago = [
        'Contado' => 'Contado',
        '30 dias' => '30 dias',
        '30-60 dias' => '30-60 dias',
        '30-60-90 dias' => '30-60-90 dias',
    ];

    /** Modelos que estarán disponibles en todos los controladores. */
    var $uses = array('Categorias.Categoria', 'Ubicacion.Provincia', 'Unidad');
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


        //variables disponibles en todas las vistas:
        $this->set('deleteBtn', $delete);
        $this->set('editBtn', $edit);
        $this->set('viewBtn', $view);
        $this->set('guardar', $guardar);
        $this->set('buscar', $buscar);
        $this->set('aceptar', $aceptar);
        $this->set('cancelar', $cancelar);
        $this->set('formHorizontal', $formHorizontal);
        $this->set('inputDefaults', $inputDefaults);
    }

}
