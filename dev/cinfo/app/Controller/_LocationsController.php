<?php
class LocationsController extends AppController {
    
   public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function admin_index() {
         $this->set('posts', $this->Location->find('all'));
         /*$locations = array();
 
            // Marker #1 
            $locations[] = array(
                'google_map' => array(
                    'lat' => '-6.976622',
                    'lng' => '110.39068959999997',
                ),
                'location_address' => 'Puri Anjasmoro B1/22 Semarang',
                'location_name'    => 'Loc A',
            );*/
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Location->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('location', $post);
    }

}
?>