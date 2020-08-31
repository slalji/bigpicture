<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UploadsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
  public $name = 'Uploads';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
        

        public function admin_index() {
            $target_path =  WWW_ROOT . 'files/';
            if ($this->request->is('post') || $this->request->is('put')) {
             //die();
             $file = $this->request->data['Document']['submittedfile'];
             //$this->pdfadd1->save($this->request->data);
             if (move_uploaded_file($this->data['Document']['submittedfile']['tmp_name'], WWW_ROOT . 'files/' . $this->data['Document']['submittedfile']['name']))
                 //chmod($target_path, 0755);
                    echo "<p>The file ".  basename( $_FILES['uploadedfile']['name']). 
                    " has been uploaded";
                } else{
                    echo "There was an error uploading the file, please try again!";    
                             }
                        }
}
