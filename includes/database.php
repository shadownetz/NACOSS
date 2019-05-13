<?php 
require_once("connect.php");

class MySQLDatabase{
    
    private $connection;
    private $result;
    private $result_set;
    private $last_query;
    private $variable;
    private $dbconnect;
            
    function __construct() {
        $this->open_connection();
        //session_start();
    }

    public function open_connection(){
            $this->connection= mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if(mysqli_connect_errno()){
        die("Database connection failed: ".
        mysqli_connect_error(). 
            "(".mysqli_connect_errno().")"
        );
}
    }
    
    
    public function escape_value($variable){
        $result = mysqli_real_escape_string($this->connection, $variable);
        return $result;  
    }
    public function query($query){
        $this->last_query = $query; 
        //echo $query;
        $result = mysqli_query($this->connection, $query);
        $this->confirm_query($result);
        return $result;
    }
    
    public function fetch_array($result){
        $this->result_set = mysqli_fetch_array($result);
        return $this->result_set;
    }
    
    public function num_rows($result_set){
        return mysqli_num_rows($result_set);
    }
    
    public function insert_id(){
        return mysqli_insert_id($this->connection);
    }
    
    public function affected_rows(){
        return mysqli_affected_rows($this->connection);
    }
    
    private function confirm_query($result){
        if(!$result){
            $output = "Database query failed: " . $result . "<br><br>";
            $output .= "Last SQL query: " . $this->last_query;
           die($output);
        }
    }

    public function query_results($query){
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function close_connection(){
        if(isset($this->connection)){
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }
}

$database = new MySQLDatabase();

//$database->close_connection();
$db =& $database; 
?>