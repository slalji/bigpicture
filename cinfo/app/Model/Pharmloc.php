<?php

class Pharmloc extends AppModel {
    
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
   /* public function getCategories($name) {
      $cat = $this->find('all', 
                array('conditions' => array('name' => $name) )
            );
    return $cat;
    }*/
}