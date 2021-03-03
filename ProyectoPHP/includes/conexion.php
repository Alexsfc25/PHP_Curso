<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "blog";
$port = 3308;
$db = mysqli_connect($server, $username, $password, $database, $port);
mysqli_query($db, "SET NAMES 'UTF8'");
// echo (mysqli_errno($db)) ? 'Error en la conexión con la bd ' . mysqli_connect_errno() : 'Conexión exitosa';
//Iniciar la session
if (!isset($_SESSION))
    session_start();
