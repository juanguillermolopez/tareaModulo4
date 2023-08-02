<?php
session_start();
require_once 'contentModel.php';

$content = new Content();

if($_SESSION['age'] >= 18) {
    $content->showAdultContent();
} else {
    $content->showKidContent();
}
?>
