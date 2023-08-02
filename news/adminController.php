<?php
session_start();
require_once 'newsModel.php';

if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
    $news = new News();

    if(isset($_POST['delete'])) {
        $newsId = $_POST['newsId'];
        $news->deleteNews($newsId);
    }

    if(isset($_POST['update'])) {
        $newsId = $_POST['newsId'];
        $newContent = $_POST['newContent'];
        $news->updateNews($newsId, $newContent);
    }
} else {
    echo "No tienes permiso para acceder a esta página.";
}
?>
