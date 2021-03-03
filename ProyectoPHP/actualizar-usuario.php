<?php
if (isset($_POST)) {
    require_once 'includes/conexion.php';
    require_once 'includes/helpers.php';
    if (!isset($_SESSION)) {
        session_start();
    }
    // Capturar valores
    $nombre = isset($_POST['nombreR']) ? mysqli_real_escape_string($db, test_input($_POST['nombreR'])) : '';
    $apellidos = isset($_POST['apellidosR']) ? mysqli_real_escape_string($db, test_input($_POST['apellidosR'])) : '';
    $email = isset($_POST['emailR']) ? mysqli_real_escape_string($db, test_input($_POST['emailR'])) : '';
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


    if (count($errores) == 0) {
        $usuario = $_SESSION['usuario'];
        //Comprobar si el email existe
        $sql = "SELECT id, EMAIL FROM USUARIOS WHERE EMAIL='$email'";
        $exist_email = mysqli_query($db, $sql);
        $exist_usuario = mysqli_fetch_assoc($exist_email);

        if ($exist_usuario['id'] == $usuario['id'] || empty($exist_usuario)) {
            //Actualizar usuario en la BD
            $sql = "UPDATE usuarios SET NOMBRE = '$nombre',
        APELLIDOS = '$apellidos',
        EMAIL = '$email'
        WHERE id = " . $usuario['id'];
            $query = mysqli_query($db, $sql);
            if ($query) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "Tus datos se han actualizado con exito";
            } else {
                var_dump(mysqli_error($db));
                $_SESSION['errores']['general'] = "Fallo al actualizar el Usuario";
            }
        } else {
            $_SESSION['errores']['general'] = "El correo ya existe";
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
}

header('Location:mis-datos.php');
