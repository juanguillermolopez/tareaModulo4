<?php

class Coneccion{
    
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "ipp-m4";
    public $conn;

    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}

?>