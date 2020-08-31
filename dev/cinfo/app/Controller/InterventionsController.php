<?php
class InterventionsController extends AppController {
        public $scaffold ="admin" ;
        public $helpers = array('Html', 'Form', 'Session');
        public $components = array('Session');
        var $name = 'Interventions';
        var $uses = array('Intervention','Faq');
           
                      
        public function index() {
         $this->set('interventions', $this->Intervention->find('all'));
         $this->set('faqs', $this->Faq->getFAQs('phar'));
         
          
        }
        // app/Controller/PostsController.php
        public function add() {
            if ($this->request->is('post')) {
                //Added this line
               // $this->request->data['Pharmacist']['user_id'] = $this->Auth->user('id');
                if ($this->Pharmacist->save($this->request->data)) {
                    $this->Session->setFlash(__('Your post has been saved.'));
                    return $this->redirect(array('action' => 'index'));
                }
            }
        }
       

}