<?php
require_once '../includes/conexion.php';
if (isset($_SESSION['usuario']) && isset($_GET['id'])) {
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM ENTRADAS WHERE USUARIO_ID= $usuario_id AND ID = $entrada_id";
    mysqli_query($db, $sql);
}
header("Location:../index.php");
