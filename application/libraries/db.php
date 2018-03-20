<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MySQLDatabase{
    
    private $connection;
    public $last_query;
    private $magic_quotes_active;
    private $real_escape_string_exists;
    
    function __construct() {
        $this->open_connection();
        $this->magic_quotes_active = get_magic_quotes_gpc();
        $this->real_escape_string_exists = function_exists("mysql_real_escape_string");
    }
    
    // Open Database Connection
    public function open_connection(){
		//$this->connection = mysql_connect("107.150.49.12", "kyc_admin", "kyc@4321");
       $this->connection = mysql_connect("localhost", "root", "");
        if(!$this->connection){
            die("database connection Failed ".  mysql_error());
        }else{
        $db_select = mysql_select_db("k-family", $this->connection);
        // $db_select = mysql_select_db("test", $this->connection);
            if(!$db_select){
                die("Database Select database Failed: ".mysql_error());
            }
        }
                
    }
    
    // Close Database Connection
    public function close_connection(){
       if(isset($this->connection)){
           mysql_close($this->connection);
           unset($this->connection);
       } 
    }

    // Perform Query
    public function query($sql){
        $this->last_query = $sql;
        //echo $sql."<br>";
		$result = mysql_query($sql, $this->connection);
        $this->confirm_query($result);
        return $result;
    }
    
    //mysql fetch
    public function fetch_array($result_set){
       return mysql_fetch_array($result_set); 
    }
	
	public function mysql_fetch_assoc($result_set){
       return mysql_fetch_assoc($result_set); 
    }
    
    // number of rows
    public function num_rows($result_set){
        return mysql_num_rows($result_set);
    }
    
    // last insert id
    public function insert_id(){
        //get the last id iserted over ther current db connection
        return mysql_insert_id($this->connection);
    }
    
    //affected rows
    public function affected_rows(){
        return mysql_affected_rows($this->connection);
    }
    
    // check if query is valid
    private function confirm_query($result){
        if(!$result){
            $output = "Database query failed:".mysql_error();
            $output.= "Last Query".$this->last_query;
            die($output);
        }
    }
    
    // check is magic quotes are on
    public function escape_value($value){
       if($this->real_escape_string_exists){
           // undo any magic qoute effects so mysql)real)escape_string can do the work
           if($this->magic_quotes_active){$value = stripcslashes($value);}
           $value = mysql_real_escape_string($value);
       }else{
           // if magic quotes aren't already on then add slashes manually
           if(!$this->magic_quotes_active){$value = addcslashes ($value);
           // if magic quotes are active, the the slashes already exist
           }           
       }
       return $value;
    }
    
}

$database = new MySQLDatabase();
$db =& $database;
?>
