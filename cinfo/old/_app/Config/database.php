<?php
class DATABASE_CONFIG {
var $default = array('datasource' => 'Database/Mysql', 
                'driver' => 'mysql',
                 'persistent'  => false,
                     'host'        => 'localhost',
                     'login'       => 'emphasis_salma',
                     'password'    => 'NailsSellZenithPurge48',
                     'database'    => 'emphasis_patients',
                     'prefix'      => '');

var $test = array('datasource' => 'Database/Mysql',
                 'persistent'  => false,
                     'host'        => 'ubcsys-dbp01.webi.it.ubc.ca',
                     'login'       => 'user',
                     'password'    => 'password!',
                     'database'    => 'test_database_name',
                     'prefix'      => '');

}
?>