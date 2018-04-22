<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    /** Modelos que estarán disponibles en todos los controladores. */
    var $uses = array('Categoria', 'Provincia', 'Unidad', 'Condicion');
    Public $phpNow;
    public $components = array(
//        'Security',
        'Flash',
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'pages'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'landing_general',
            ),
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

    public function beforeFilter() {
        $this->phpNow = (new DateTime())->format('Y-m-d');

        // permitimos accion display y registrar (sin login).
        $this->Auth->allow('registrar', 'landing_general');
        $this->Auth->authError = __('Para ingresar debes estar loggeado.');

        $loggedInId = AuthComponent::user('id');

//        debug($loggedInId);die;
        //variables disponibles en las vistas. 
        $this->set('loggedInId', AuthComponent::user('id'));
        $this->set('loggedInUserName', AuthComponent::user('username'));
        $this->set('loggedInEmail', AuthComponent::user('email'));
        $this->set('loggedInRole', AuthComponent::user('role'));
        $this->set('loggedInRazonSocial', AuthComponent::user('razon_social'));
        $this->set('loggedInCuit', AuthComponent::user('cuit'));
//        $this->set('phpNow', $this->phpNow->format('Y-m-d'));


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
        $delete = array(
            'div' => false,
            'title' => 'Eliminar',
            'class' => 'btn btn-danger ti-trash',
            'confirm' => 'Está seguro que desea eliminar?',
        );
        $edit = array(
            'div' => false,
            'title' => 'Editar',
            'class' => 'btn btn-info fa fa-edit pull-right',
        );
        $view = array(
            'div' => false,
            'title' => 'Ver',
            'class' => 'btn btn-info fa fa-search-plus pull-right',
        );
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

        $this->set('deleteBtn', $delete);
        $this->set('editBtn', $edit);
        $this->set('viewBtn', $view);
        $this->set('guardar', $guardar);
        $this->set('buscar', $buscar);
        $this->set('aceptar', $aceptar);
        $this->set('cancelar', $cancelar);
        $this->set('formHorizontal', $formHorizontal);
        $this->set('inputDefaults', $inputDefaults);

        $this->set('provincias', $this->Provincia->options());
    }

}
