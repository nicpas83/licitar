<?php

/**
 * Static content controller.
 * This file will render views from views/pages/
 * App::uses('AppController', 'Controller');
 */

class PagesController extends AppController {
    /**
     * This controller does not use a model
     * @var array
     */
    public $uses = array('Proceso');

    /**
     * Displays a view
     *
     * @return CakeResponse|null
     * @throws ForbiddenException When a directory traversal attempt.
     * @throws NotFoundException When the view file could not be found
     *   or MissingViewException in debug mode.
     */
    public function display() {
        $path = func_get_args();
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }
        $this->set(compact('page', 'subpage', 'title_for_layout'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingViewException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
        
        $this->autoRender = false;
        
        if($this->Session->check('Auth.User')){
           
            $this->set('procesos',$this->Proceso->misProcesos($this->Auth->user('id')));
            $this->render('inicio');
        }else{
            $this->render('home');
        }
        
    }

}