<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class SurveysController extends AppController{
    public $helper = array('Html', 'Form', 'Session','Js');
    
   
        public function index() {
         $this->set('surveys', $this->Survey->find('all'));
    }
   
    
    public function add(){
            if ($this->request->is('post')) { //post get request
            $this->Survey->create();
            if ($this->Survey->save($this->request->data)) {
                $this->Session->setFlash(__('Your survey has been saved'));
                return $this->redirect(array('action' => 'success'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
    public function survey(){
            if ($this->request->is('post')) { //post get request
            $this->Survey->create();
            if ($this->Survey->print($this->request->data)) {
               echo $this->Session->setFlash(__('Your survey has been saved'));
                   // return $this->redirect(array('action' => 'survey', 'section'=>''));
                $this->redirect(Controller::referer()); 
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }

    
     public function view(){
         $this->set('surveys', $this->Survey->find('all'));
    }
}
?>