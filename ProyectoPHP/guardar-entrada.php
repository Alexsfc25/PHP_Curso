<?php
if (isset($_POST)) {
    # Conexión al a la bd
    require_once 'includes/conexion.php';
    require_once 'includes/helpers.php';
    $titulo = (isset($_POST['titulo'])) ? mysqli_real_escape_string($db, test_input($_POST['titulo'])) : false;
    $descripcion = (isset($_POST['descripcion'])) ? mysqli_real_escape_string($db, test_input($_POST['descripcion'])) : false;
    $categoria = (isset($_POST['categoria'])) ? (int) mysqli_real_escape_string($db, test_input($_POST['categoria'])) : false;
    $usuario = (int) $_SESSION['usuario']['id'];
    //array de errores
    $errores = array();

    // Validación de campos
    if (empty($titulo) || is_numeric($titulo)) {
        $errores['titulo'] = "Titulo de entrada no válido";
    }
    if (empty($descripcion)) {
        $errores['descripcion'] = "Descripción de la entrada no válida";
    }
    if (empty($categoria) || !is_numeric($categoria)) {
        $errores['categoria'] = "Categoría no válida";
    }
    if (count($errores) == 0) {

        $sql = "INSERT INTO ENTRADAS VALUES(NULL,$usuario,$categoria,'$titulo','$descripcion',CURDATE());";
        $gcategoria = mysqli_query($db, $sql);

        header("Location:index.php");
    } else {
        $_SESSION['errores_entrada'] = $errores;
        header("Location:crear-entradas.php");
    }
}
