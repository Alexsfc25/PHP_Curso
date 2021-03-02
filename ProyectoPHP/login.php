<?php
//Iniciar la sesión y la conexión al la bd
require_once 'includes/conexion.php';
//Recoger datos del formulario
if ($_POST && !isset($_SESSION['usuario'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM USUARIOS WHERE EMAIL='$email'";
    $login = mysqli_query($db, $sql);
    if ($login && mysqli_num_rows($login) == 1) {

        $usuario = mysqli_fetch_assoc($login);
        //Comprobar la contraseña
        if (password_verify($password, $usuario['password'])) {
            //Utilizar una sesión para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;
            if (isset($_SESSION['error_login'])) unset($_SESSION['error_login']);
        } else {
            //mensaje de error
            $_SESSION['error_login'] = "Login Incorrecto!";
        }
    } else {
        //mensaje de error
        $_SESSION['error_login'] = "Login Incorrecto!";
    }
}
header("Location:index.php");
