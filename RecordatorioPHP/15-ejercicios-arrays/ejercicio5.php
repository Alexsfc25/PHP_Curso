<?php
/*
 * Crear un array  con el contenido de la tabla:
 * ACCION   AVENTURA    DEPORTES
 * GTA      ASSASSINS   FIFA21
 * COD      CRASH       PES21
 * PUGB     Prince      Madden21
 *          of Persia
 * Cada fichero debe de ir en un fichero separado(includes)
 */

$juegos = array(
    "ACCION" => array("GTA", "COD", "PUGB"),
    "AVENTURA" => array("ASSASSINS", "CRASH", "Prince of Persia"),
    "DEPORTES" => array("FIFA21", "PES21", "Madden21"),
);
$categorias = array_keys($juegos);
?>

<table border="1">
    <?php include_once 'includes/categorias.php'; ?>
    <?php include_once 'includes/fila1.php'; ?>
    <?php include_once 'includes/fila2.php'; ?>
    <?php include_once 'includes/fila3.php'; ?>

</table>