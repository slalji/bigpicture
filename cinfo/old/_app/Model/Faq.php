<?php

class Faq extends AppModel {
    
    
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'content' => array(
            'rule' => 'notEmpty'
        )
    );
    
    public function getFAQs($type) {
      $faqs = $this->find('all', 
                array('conditions' => array('type' => $type) )
            );
    return $faqs;
    }
    
} 