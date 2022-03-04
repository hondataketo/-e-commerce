<?php 
session_start();

class connection{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'portfolio';
    public $conn;

    public function __construct()
    {    
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
    }
}
?>