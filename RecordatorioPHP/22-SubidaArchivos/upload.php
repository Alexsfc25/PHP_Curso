<?php
$archivos = $_FILES['archivos'];
// var_dump($archivos);
// die();
$nombre = $archivos['name'];
$tipo = $archivos['type'];

if ($tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/jpeg" || $tipo == "image/gif") {

    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    move_uploaded_file($archivos['tmp_name'], 'images/' . $nombre);
    echo "<h1>Imagen subida Correctamente</h1>";
    header("Refresh: 5; URL=index.php");
} else {
    header("Refresh: 5; URL=index.php");
    echo "<h2>Sube una imagen</h2>";
}
