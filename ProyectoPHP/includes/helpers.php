<?php

function mostrarError($errores, $campo)
{
    $alerta = "";
    if (isset($errores[$campo]) && !empty($campo)) {

        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
    }
    return $alerta;
}

function borrarErrores()
{
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }
    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        unset($_SESSION['errores_entrada']);
    }
    if (isset($_SESSION['errores_categoria'])) {
        $_SESSION['errores_categoria'] = null;
        unset($_SESSION['errores_categoria']);
    }
    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }
}

function getCategorias($conexion)
{
    $sql = "SELECT * FROM CATEGORIAS ORDER BY ID ASC ";
    $categorias =   mysqli_query($conexion, $sql);
    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = $categorias;
    }
    return  $resultado;
}

function getCategoriaById($conexion, $id)
{
    $sql = "SELECT * FROM CATEGORIAS WHERE ID = $id ORDER BY ID ASC;";
    $categorias =   mysqli_query($conexion, $sql);
    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = mysqli_fetch_assoc($categorias);
    }
    return  $resultado;
}
function getEntradaById($conexion, $id)
{
    $sql = "SELECT E.* , C.NOMBRE AS 'CATEGORIA', CONCAT(U.NOMBRE,' ',U.APELLIDOS ) AS 'USUARIO' FROM ENTRADAS E
    INNER JOIN CATEGORIAS C ON E.CATEGORIA_ID=C.ID
    INNER JOIN USUARIOS U ON E.USUARIO_ID=U.ID
    WHERE E.ID = $id ORDER BY E.ID ASC;";
    $entrada =   mysqli_query($conexion, $sql);
    $resultado = array();
    if ($entrada && mysqli_num_rows($entrada) >= 1) {
        $resultado = mysqli_fetch_assoc($entrada);
    }
    return  $resultado;
}

function getEntradas($conexion, $limit = null, $categoria = null, $busqueda = null)
{
    $sql = "SELECT E.*, C.nombre AS 'categoria' FROM ENTRADAS E
        INNER JOIN CATEGORIAS C ON E.CATEGORIA_ID=C.ID ";

    if (!empty($categoria)) $sql .= " WHERE E.CATEGORIA_ID=$categoria ";
    if (!empty($busqueda)) {
        $busqueda = filter_var($busqueda, FILTER_SANITIZE_STRING);
        $sql .= " WHERE E.TITULO LIKE '%$busqueda%' ";
    }
    $sql .= "ORDER BY E.ID DESC ";

    if ($limit)   $sql .= "LIMIT 4";


    $entradas =   mysqli_query($conexion, $sql);
    $resultado = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $resultado;
}

//Sanitizar entrada
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
