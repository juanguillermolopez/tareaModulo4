<?php
require_once '../coneccion/coneccion.php';

class User {
    private $conn;

    public function login($username, $password) {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            session_start();
            $_SESSION['username'] = $username;
            return true;
        } else {
            return false;
        }
    }
}
?>
