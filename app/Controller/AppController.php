<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    
    /** 
     * Modelos que estarán disponibles en todos los controladores. 
     */
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
    

    public function beforeFilter() {
        
        $this->Auth->allow('display','registro');   // permitimos la accion display.  (home page)
        $this->Auth->authError = __('Para ingresar debes estar loggeado.');

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
        
        $this->set('rubros', $this->Rubro->options());
        $this->set('unidades', $this->Unidad->options());
        $this->set('condiciones', $this->Condicion->options());
        $this->set('provincias', $this->Provincia->options());
    }

    

}
