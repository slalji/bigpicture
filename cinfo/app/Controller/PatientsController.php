<?php
// File: /app/Controller/PostsController.php
class PatientsController extends AppController {
        public $scaffold ="admin" ;
        public $helpers = array('Html', 'Form', 'Session');
        public $components = array('Session');
        var $uses = array('Patient','Faq');
        

    public function index() {
        $this->set('patients', $this->Patient->find('all'));
        $this->set('faqs', $this->Faq->getFAQs('patient'));
        
    }

   
}