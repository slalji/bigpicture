<?php
/**
 * Created by PhpStorm.
 * User: vaio
 * Date: 4/23/2015
 * Time: 2:32 AM
 */
//define some contstant
//define( "DB_DSN", "mysql:host=localhost;dbname=likejagg_hammerv1" );
define( "DB_HOST", "localhost" );
define( "DB_NAME", "emphasis_patients" );
define( "DB_USER", "emphasis_salma" );
define( "DB_PASS", "NailsSellZenithPurge48" );




class Database{
    private $host      = DB_HOST;
    private $user      = DB_USER;
    private $pass      = DB_PASS;
    private $dbname    = DB_NAME;

    protected $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        //Set timezone

        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        //$dsn="mysql:host=$this->DB_HOST;dbname=$this->DB_NAME";
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // Create a new PDO instanace
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            //$this->dbh = new PDO('mysql:dbname='.$this->dbname.';host=localhost',$this->user, $this->pass);
            //$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        }
            // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    function log_error($cause)
    {
        try
        {
            $sth = $this->dbh->prepare("SELECT * from portal_errors");
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
        }
        catch (PDOException $e)
        {
            print_r($e->errorInfo);
        }
    }
    /**
     * @param $query
     */
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute(){
        return $this->stmt->execute();
    }
    public function resultset(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
    public function beginTransaction(){
        return $this->dbh->beginTransaction();
    }

    public function endTransaction(){
        return $this->dbh->commit();
    }

    public function cancelTransaction(){
        return $this->dbh->rollBack();
    }
    public function debugDumpParams(){
        return $this->stmt->debugDumpParams();
    }
    

}
