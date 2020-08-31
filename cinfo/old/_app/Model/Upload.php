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
         'upload-file' => array(
                 'rule' => array('checkUpload'),
                 'message' => 'Error uploading file'
          )
    )
);
}