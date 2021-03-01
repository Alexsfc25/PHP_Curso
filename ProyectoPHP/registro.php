<?php


if (isset($_POST)) {
    require_once 'includes/conexion.php';
    if (!isset($_SESSION)) {
        session_start();
    }

    $nombre = isset($_POST['nombreR']) ? mysqli_real_escape_string($db, $_POST['nombreR']) : '';
    $apellidos = isset($_POST['apellidosR']) ? mysqli_real_escape_string($db, $_POST['apellidosR']) : '';
    $email = isset($_POST['emailR']) ? test_input($_POST['emailR']) : '';
    $password = isset($_POST['passwordR']) ? test_input($_POST['passwordR']) : '';

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
        //Cifrar la contraseña
        $pw_secure = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        // var_dump($password);
        // var_dump($pw_secure);
        // función que verifica si el password es correcto
        // var_dump(password_verify("asdad", $pw_secure));

        //insertra usuario en la BD
        $sql = "INSERT INTO usuarios VALUES(NULL,'$nombre','$apellidos','$email','$pw_secure',CURDATE());";
        $query = mysqli_query($db, $sql);
        // var_dump(mysqli_error($db));
        // die();
        $query ? $_SESSION['completado'] = "El registro se a completado con exito" : $_SESSION['errores']['general'] = "Fallo al guardar el Usuario";
    } else {
        $_SESSION['errores'] = $errores;
    }
}
header('Location:index.php');


//Sanitizar entrada
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
