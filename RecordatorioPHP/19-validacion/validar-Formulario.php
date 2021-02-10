<?php
$error = true;
$nombre = $email = $apellidos = $edad = $contrasena = "";

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
        !empty($_POST['email']) && !empty($_POST['edad']) && !empty($_POST['contrasena'])) {

    $error = false;

    $nombre = test_input($_POST['nombre']);
    $apellidos = test_input($_POST['apellidos']);
    $edad = test_input($_POST['edad']);
    $email = test_input($_POST['email']);
    $contrasena = test_input($_POST['contrasena']);
//    Validación del nombre
    if (!is_string($nombre) || preg_match("/[A-Za-z]+/", $nombre)) {
        $error = "nombre";
    }
//    Validación apellidos
    if (!is_string($apellidos) || preg_match("/[A-Za-z]+/", $apellidos)) {
        $error = "apellidos";
    }
//    Validación edad
    if (!is_numeric($edad) || filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = "edad";
    }
//    Validación email
    if (!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "email";
    }
//    Validación contraseña
    if (empty($contrasena) || strlen($contrasena) < 4) {
        $error = "contrasena";
    }
    if ($error != false) {
        header("Location:index.php?error=$error");
    }
} else {
    header("Location:index.php?error=$error");
}

// Método para sanitizar los valores enviados en la URL
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Validar Formularios PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if (!$error): ?>
            var_dump($error);
            var_dump($_POST);
            <p>El nombre es: <?= $nombre ?></p>
            <p><?= $apellidos ?></p>
            <p><?= $edad ?></p>
            <p><?= $email ?></p>
            <p><?= $contrasena ?></p>

        <?php endif; ?>

    </body>
</html>