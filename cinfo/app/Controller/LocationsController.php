<?php
class LocationsController extends AppController {
    public $scaffold ="admin" ;
   public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
      var $name = 'Locations';
        var $uses = array('Locations');
           
        public function index() {
         $this->set('locations', $this->Locations->find('all'));
        
          
        }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Locations->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

}
?>