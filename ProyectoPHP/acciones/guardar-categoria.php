<?php
if (isset($_POST)) {
    # Conexión al a la bd
    require_once '../includes/conexion.php';
    require_once '../includes/helpers.php';
    $nombre = (isset($_POST['nombre'])) ? mysqli_real_escape_string($db, test_input($_POST['nombre'])) : false;

    //array de errores
    $errores = array();

    // Validación de campos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("[0-9]", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "Nombre de Categoría no válido";
    }
    if (count($errores) == 0) {
        $sql = "INSERT INTO CATEGORIAS VALUES(NULL,'$nombre');";
        $gcategoria = mysqli_query($db, $sql);
        header("Location:../index.php");
    } else {
        $_SESSION['errores_categoria'] = $errores;
        header("Location:../crear-categoria.php");
    }
}
