<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Survey
 *
 * @author Masande
 */

class Survey extends AppModel{
     public $validate = array(
         'date_completed' => array(
            'rule' => 'notEmpty'
        ),
         'completed_by' => array(
            'rule' => 'notEmpty'
        ),
        'Q1' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 1'
        ),
        'Q2' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 2'
        ),
	'Q3' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 3'
        ),
        'Q4' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 4'
        ),
	'Q5' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 5'
        ),
        'Q6' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 6'
        ),		  
        'Q7' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 7'
        ),
	'Q8' => array(
            'rule' => 'notEmpty',
            'message' => 'Please answer question 8'
        )
    );

}
    
?>
