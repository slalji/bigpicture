<?php
class PharmlocsController extends AppController {
    
 public $scaffold ="admin" ;
   public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
     var $name = 'Pharmlocs';
  

    public function index() { 
         $this->set('posts', $this->Pharmloc->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Pharmloc->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

}
?>