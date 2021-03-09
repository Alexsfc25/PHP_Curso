<?php
require_once './controllers/usuarioController.php';
require_once './controllers/notaController.php';
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . "Controller";
} else {
    echo 'No existe el recursosdadad';
    exit();
}

if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo 'No existe el recurso';
    }
} else {
    echo 'No existe el recurso';
}
?>
<h1>Hola Mundo</h1> 
