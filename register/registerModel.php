<?php
require_once '../coneccion/coneccion.php';

class User {
    private $conn;
    
    public function createUser($username, $password) {
        $password = md5($password); // contraseña encriptada por seguridad
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->close();
    }
}
?>
