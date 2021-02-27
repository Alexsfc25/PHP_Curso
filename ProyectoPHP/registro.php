<?php

if (isset($_POST['submit'])) {
    $nombre = isset($_POST['nombreR']) ? test_input($_POST['nombreR']) : '';
    $apellidos = isset($_POST['apellidosR']) ? test_input($_POST['apellidosR']) : '';
    $email = isset($_POST['emailR']) ? test_input($_POST['emailR']) : '';
    $password = isset($_POST['passwordR']) ? test_input($_POST['passwordR']) : '';
}
//array de errores

$errores = array();

// Validación de campos

if (!empty($nombre) && !is_numeric($nombre) && !preg_match("[0-9]", $nombre)) {
    $nombre_validado = true;
} else {
    $nombre_validado = false;
    $errores['nombre'] = "Nombre no válido";
}
if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("[0-9]", $apellidos)) {
    $apellidos_validado = true;
} else {
    $apellidos_validado = false;
    $errores['apellidos'] = "Apellidos no válidos";
}
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_validado = true;
} else {
    $email_validado = false;
    $errores['email'] = "Email no válido";
}
if (!empty($password)) {
    $password_validado = true;
} else {
    $password_validado = false;
    $errores['password'] = "Password vacio";
}
$guardarUsuario = false;
if (count($errores) == 0) {
    $guardarUsuario = true;
}


//Sanitizar entrada
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
