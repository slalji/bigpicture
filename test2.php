<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
 header('Content-type: application/json');
 //$host = "ubcsys-dbp01.webi.it.ubc.ca";
 $host = "localhost";
  $user = "sallalji";
  $pass = "GorgesFoesGulagSeduce23";

  $databaseName = "core_pubs";
  $tableName = "pubs";
  
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
if (!$dbs)
    echo "mysql not connected please try again";
$search = $_REQUEST['search'];
$year = date("Y"); 
if (!isset($_REQUEST['search']) && $_REQUEST['search']=='')
    //alert();
        $sql="SELECT * FROM pubs where year=".$year;
else 
   $sql="SELECT * FROM pubs WHERE CONCAT(title,authors,journals,year,pid,id) LIKE '%".$search."%'";
    
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
 $result = mysql_query($sql);          //query
  //$array = mysql_fetch_row($result); 
 
 // print json_encode($array);  
 
for($rows = array(); 
 $row = mysql_fetch_assoc($result); $rows[] = $row);
 print json_encode($rows);//.$sql;  

/*/*print "\n\n";
$result= mysql_query($sql) or die(mysql_error());
$rows = array(); 
while($data = mysql_fetch_assoc($result)){    
        $rows[]= $data;
   }
  
 print json_encode($rows).$sql;
 * */
 
//fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  //echo json_encode($array);
 

?>

