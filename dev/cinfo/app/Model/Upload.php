<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');


class Upload extends AppModel {
    public $validate = array(
    'Document.submittedfile' => array(
        'extension' => array(
            'rule' => array('extension', array('pdf')),
             'message' => 'Only pdf files',
         ),
         /*'upload-file' => array(
                 'rule' => array('checkUpload'),
                 'message' => 'Error uploading file'
          )*/
          'upload-file' => array(
			
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the file upload',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif','image/png','image/jpg','image/jpeg','text/pdf',)),
				'message' => 'Invalid file, only images allowed',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// custom callback to deal with the file upload
			'processUpload' => array(
				'rule' => 'processUpload',
				'message' => 'Something went wrong processing your file',
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'last' => TRUE,
			)
		)
    )
);
}