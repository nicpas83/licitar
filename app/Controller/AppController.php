<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    
    
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

        $formHorizontal = [
            'class' => 'form-horizontal',
            'inputDefaults' => array(
                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                'class' => 'form-control',
                'div' => array('class' => 'form-group'),
                'label' => array('class' => 'col-lg-4', 'control-label'),
                'between' => '<div class="col-lg-8">',
                'after' => '</div>',
                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'text-danger')),
            )
        ];
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

        $this->set('horizontal', $formHorizontal);
        $this->set('guardar', $guardar);
        $this->set('aceptar', $aceptar);
        $this->set('cancelar', $cancelar);
    }

    

}
