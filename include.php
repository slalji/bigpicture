<?php
/**
*	@author 	Ing. Israel Barragan C.  Email: ibarragan at behstant dot com
*	@since 		07-Jun-2013
*	##########################################################################################
*	Comments:
*	This includes a function that will return a PDO Instance.
*	##########################################################################################
*	@version
*	##########################################################################################
*	1.0	|	06-Jun-2013	|	Creation of new class with parameter as constructor.
*	##########################################################################################
*/

function dbConnect (){
 	$conn =	null;
 	//$host = 'ubcsys-dbp01.webi.it.ubc.ca';
 	$host = 'localhost';
 	$db = 	'emphasis_patients';
 	$user = 'emphasis_salma';
 	//$user = 'sallalji';
 	$pwd = 	'NailsSellZenithPurge48';
 	//$pwd = 	'GorgesFoesGulagSeduce23';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
		echo '<p>'.$e.'</p>';
	    exit;
	}
	return $conn;
 }

 ?>

