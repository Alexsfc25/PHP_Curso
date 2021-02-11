<?php
/*
1.-Una función
2.-Validar un email con filter_var
3.-Recoger vaariable con get y validarla
4.-Mostrar el resultado
*/

function validarEmail($email)
{
    $valido = false;
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valido = true;
    }
    return $valido;
}

if (isset($_GET['email'])) {
    echo validarEmail($_GET['email']) == true ? "Email válido" : "ingresa un email válido";
} else {
    echo "Envia un email por url";
}
