<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');


class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A email is required'
            )
        ),
        'user has been taken' => array(
            'rule' =>'isUnique',
            'message' => 'That email has already been taken'
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            /*'match passwords' =>array(
                'rule' =>'matchPasswords',
                'message' => 'Your passwords do not match'
            )*/
        ),
         /*'password_confirmation' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please confirm your password'
            )
        ),*/
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
    
    public function matchPasswords($data) {
        if($data['password'] == $this->data['User']['password_confirmation']){
            return true;
        }
            $this->invalidate('password_confirmation', 'Your passwords do not match');
            return false;
        
    }
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}
}