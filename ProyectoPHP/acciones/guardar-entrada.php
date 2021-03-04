<?php
if (isset($_POST)) {
    # Conexión al a la bd
    require_once '../includes/conexion.php';
    require_once '../includes/helpers.php';
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
        $entrada_id = $_GET['editar'];
        $usuario_id = $_SESSION['usuario']['id'];
        if (isset($_GET['editar'])) {
            $sql = "UPDATE ENTRADAS SET CATEGORIA_ID = $categoria,TITULO = '$titulo',DESCRIPCION = '$descripcion' WHERE ID=$entrada_id AND USUARIO_ID=$usuario_id";
        } else {
            $sql = "INSERT INTO ENTRADAS VALUES(NULL,$usuario,$categoria,'$titulo','$descripcion',CURDATE());";
        }
        $gcategoria = mysqli_query($db, $sql);

        header("Location:../index.php");
    } else {
        $_SESSION['errores_entrada'] = $errores;
        if (isset($_GET['editar']))
            header("Location:../editar-entrada.php?id=" . $_GET['editar']);
        else {
            header("Location:../crear-entradas.php");
        }
    }
}
