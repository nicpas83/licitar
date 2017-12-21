<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    /** Modelos que estarán disponibles en todos los controladores. */
    var $uses = array('Rubro','Provincia','Unidad', 'Condicion');
    
    public $components = array(
        'Flash',
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'pages'    
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
    
    public function fecha($fecha){
        return $fecha+1;
    }
    

    public function beforeFilter() {        
        // permitimos accion display y registrar (sin login).
        $this->Auth->allow('display','registrar');   
        $this->Auth->authError = __('Para ingresar debes estar loggeado.');
        
        //variables disponibles en todo el sistema. 
        $this->set('loggedInId', AuthComponent::user('id'));
        $this->set('loggedInUserName', AuthComponent::user('username'));
        $this->set('loggedInEmail', AuthComponent::user('email'));
        $this->set('loggedInRole', AuthComponent::user('role'));
        $this->set('loggedInRazonSocial', AuthComponent::user('razon_social'));
        $this->set('loggedInCuit', AuthComponent::user('cuit'));
        
        
        $guardar = array(
            'div' => false,
            'label' => 'Guardar',
            'class' => 'btn btn-info pull-right',
        );
        $buscar = array(
            'div' => false,
            'label' => 'Buscar',
            'class' => 'btn btn-info pull-right',
        );
        $aceptar = array(
            'div' => false,
            'label' => 'Aceptar',
            'class' => 'btn btn-info pull-right',
        );
        $cancelar = array(
            'class' => 'btn btn-info pull-right',
        );
        
        $this->set('guardar', $guardar);
        $this->set('buscar', $buscar);
        $this->set('aceptar', $aceptar);
        $this->set('cancelar', $cancelar);
        
        $this->set('provincias', $this->Provincia->options());
    }

    

}
