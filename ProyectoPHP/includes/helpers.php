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
    return $resultado;
}

function getEntradas($conexion)
{
    $sql = "SELECT E.*, C.nombre AS 'categoria' FROM ENTRADAS E
        INNER JOIN CATEGORIAS C ON E.CATEGORIA_ID=C.ID
        ORDER BY E.ID DESC LIMIT 4";
    $entradas =   mysqli_query($conexion, $sql);
    $resultado = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $resultado;
}
