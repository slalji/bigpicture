<?php

class Intervention extends AppModel {
    var $belongsTo = array(
    'Faq' => array(
        'className' => 'Faq',
        'foreignKey' => 'id',
        'conditions' => '',
        'fields' => 'id, type, title, body',
        'order' => ''
    )
);
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'content' => array(
            'rule' => 'notEmpty'
        )
    );

    /*public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }*/
} 