<?php
session_start();
require_once 'loginModel.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $user = new User();
    if($user->login($username, $password)) {
        header('Location: ../news/newsView.php');
    } else {
        echo "Nombre de usuario o contraseña incorrecta.";
    }
}
?>
