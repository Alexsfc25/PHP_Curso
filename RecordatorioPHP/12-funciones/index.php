<?php

//Funciones 
//Ejemplo1
function muestraNombres() {
    echo '<h2>Función muestraNombres</h2>';
    echo 'Alejandro Muñoz<br/>';
    echo 'Fernando Hernández<br/>';
    echo 'Roberto López<br/>';
}

//Invocando la función

muestraNombres();
echo '<hr/>';

//Ejemplo 2

function tabla($numero) {
    echo '<h2>Función Tabla</h2>';
    echo "<h3>Tabla del $numero</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . $numero * $i . "<br/>";
    }
}

if (isset($_GET['numero'])) {
    $numero = filter_input(INPUT_GET, 'numero');
    tabla($numero);
} else {
    echo '<h2>Tienes que pasar un número en la url</h2>';
}
echo '<hr/>';

//for ($i = 1; $i <= 10; $i++) {
//    tabla($i);
//}
//Ejemplo 3

function calculadora($num1, $num2, $paramOpcional = false) {
    $cadenaTexto = "";
    $cadenaTexto .= '<h2>Función calculadora</h2>';
    if ($paramOpcional) {
        $cadenaTexto .= '<h3>';
        $cadenaTexto .= 'Función con parametro Opcional<br/>';
    }
    $cadenaTexto .= "$num1 + $num2 = " . ($num1 + $num2) . "<br/>";
    $cadenaTexto .= "$num1 - $num2 = " . ($num1 - $num2) . "<br/>";
    $cadenaTexto .= "$num1 * $num2 = " . ($num1 * $num2) . "<br/>";
    $cadenaTexto .= "$num1 / $num2 = " . ($num1 / $num2) . "<br/>";
    if ($paramOpcional) {
        $cadenaTexto .= '</h3>';
    }
    $cadenaTexto .= '<hr/>';
    return $cadenaTexto;
}

echo calculadora(32, 21);
echo calculadora(2, 4);
echo calculadora(12, 32, true);

//Retorno

function getName($nombre) {
    $texto = "El nombre es $nombre <br/>";
    return $texto;
}

function getApellido($apellido) {
    $texto = "Los apellidos son: $apellido";
    return $texto;
}

function regresar($nombre, $apellido) {
    $texto = getName($nombre) . getApellido($apellido);
    return $texto;
}

echo regresar('Alejandro', 'Muñoz');
