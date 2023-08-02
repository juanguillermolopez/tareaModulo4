<?php
require_once '../coneccion/coneccion.php';

class Content {
    private $conn;

    public function showAdultContent() {
        $query = "SELECT * FROM content WHERE age_group = 'adult'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showKidContent() {
        $query = "SELECT * FROM content WHERE age_group = 'minor'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
