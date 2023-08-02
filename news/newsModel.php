<?php
require_once '../coneccion/coneccion.php';

class News {

    public function displayNews() {
        // Aquí se recuperarían las noticias de la base de datos y se mostrarían en la página.
        echo "<p>Noticias</p>";
    }

    public function deleteNews($newsId) {
        // Aquí se eliminaría una noticia de la base de datos.
    }

    public function updateNews($newsId, $newContent) {
        // Aquí se actualizaría el contenido de una noticia en la base de datos.
    }
}
?>
