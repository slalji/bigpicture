<?php
// File: /app/Controller/PostsController.php
class AdminController extends AppController {
    // public $scaffold ="admin" ;
   public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
       /* $this->Html->link('Pharmacists', array('controller'=>'pharmacists', 'action'=>'index'));
         $this->Html->link('Patients', array('controller'=>'patients', 'action'=>'index'));*/
    }
 public function admin_index() {
       /* $this->Html->link('Pharmacists', array('controller'=>'pharmacists', 'action'=>'index'));
         $this->Html->link('Patients', array('controller'=>'patients', 'action'=>'index'));*/
    }
    
}