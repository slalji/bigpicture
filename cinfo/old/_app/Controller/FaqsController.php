<?php
class FaqsController extends AppController {
        public $scaffold ="admin" ;
        public $helpers = array('Html', 'Form', 'Session');
        public $components = array('Session');
        var $name = 'Faqs';
        //var $uses = array('Pharmacist','Faq');
           
                      
        public function index() {
         $this->set('faqs', $this->Faq->find('all'));
         
          
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