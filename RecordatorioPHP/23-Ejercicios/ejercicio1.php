<?php
// Crear una sesion que aumente su valor en uno o disminuya en uno, en función si el parametro get counter esta en 1 o en 0

session_start();

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}
$numero = isset($_GET['counter']) ? $_GET['counter'] : null;
if (isset($numero) && $numero == 0) {
    $_SESSION['numero']--;
}
if (isset($numero) && $numero == 1) {
    $_SESSION['numero']++;
}


?>
<h1>El valor de la sesión número es : <?= $_SESSION['numero'] ?></h1>
<a href="ejercicio1.php?counter=1">Aumentar</a>
<a href="ejercicio1.php?counter=0">Disminuir</a>