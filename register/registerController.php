<?php
require_once 'registerModel.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    $user->createUser($username, $password);
}
?>
