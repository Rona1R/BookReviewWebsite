<?php 

class DbConnect{

    private $conn =null;
    private $host = 'localhost'; 
    private $dbname = 'bookreview'; 
    private $username = 'root'; 
    private $password = '';
    
    
    public function connectDB(){

        try{
            $this->conn = new mysqli($this->host,$this->username,$this->password,$this->dbname); // lidhjen me databaze
        }catch(Exception $e){
            die('Connection with database '.$this->dbname.' failed! '.$e->getMessage());
        }
        
        return $this->conn;
    }
}

?>