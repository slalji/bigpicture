<?php
/*
include "include.php";
$conn = dbConnect();
			$filename = "cinfo/app/webroot/files/uploaddata.csv";
			$row = 1;
                        $handle = fopen($filename, 'r') or die("Can't open file");
 



while (($data = fgetcsv($handle, 1000, ",") or die(mysql_error())) !== FALSE) {
    $num = count($data);
    
    $row++;
	$qry = "INSERT INTO pharmLoc (id,phloc,section,name,blockorder,order)"
                . "VALUES('".$data[0]."','".'phar'.$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."')";
	$stmt = $conn->prepare($qry);
        $results = $stmt->fetchAll();
	$error = $stmt->errorInfo();
	
	if (!$results)
		echo "error ".$error->;
        else   
            echo " successfully inserted as:<br> ".$qry;
}
fclose($handle);
*/?>
<?php
include "include.php";
$db = dbConnect();
$filename = "uploaddata.csv";
$row = 0;


    try { 
        $handle = fopen($filename, 'r') or die("Can't open file");
        // prepare for insertion
        $query_ip = $db->prepare('
            INSERT INTO pharmLoc (id,phloc,section,name,location,blockorder,order)
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?          
            )
        ');

        // unset the first line like this       
        fgets($handle);

        // created loop here
        while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
            $query_ip->execute($data);
        }       

        fclose($handle);

    } catch(PDOException $e) {
        die($e->getMessage());
    }

    echo 'Projects imported';
?>



