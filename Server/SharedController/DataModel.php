<?php      
class DataModel {
    private $servername;
    private $dbname;
    private $username;
    private $password;
    public $connection;

    function __construct() {
        $this->servername ="localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "orgmanagement";

        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname."";
            $this->connection = new PDO($dsn,$this->username,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch (\Exception $e) {
            echo "failed".$e->getMessage();
        }
    }      
}
?>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=orgmanagement", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
?>
