<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    
    /** 
     * Modelos que estarán disponibles en todos los controladores. 
     */
    var $uses = array('Rubro');
    
    public $components = array(
        'Flash',
        'Session',
//        'Auth' => array(
//            'loginRedirect' => array(
//                'controller' => 'pages'    
//            ),
//            'logoutRedirect' => array(
//                'controller' => 'pages',
//                'action' => 'display',
//                'home'
//            ),
//            'authenticate' => array(
//                'Form' => array(
//                    'passwordHasher' => 'Blowfish'
//                )
//            )
//        )
    );
    

    public function beforeFilter() {
        
//        $this->Auth->allow('display');   // permitimos la accion display.  (home page)
//        $this->Auth->authError = __('Para ingresar debes estar loggeado.');

        
        
        
        $guardar = array(
            'div' => false,
            'label' => 'Guardar',
            'class' => 'btn btn-default pull-right',
        );
        $aceptar = array(
            'div' => false,
            'label' => 'Aceptar',
            'class' => 'btn btn-default pull-right',
        );
        $cancelar = array(
            'class' => 'btn btn-default pull-right',
        );

        
        $this->set('guardar', $guardar);
        $this->set('aceptar', $aceptar);
        $this->set('cancelar', $cancelar);
    }

    

}
