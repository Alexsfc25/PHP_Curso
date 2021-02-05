<?php

//variable global

$frase = "Hola Mundo";

function HolaMundo() {
// Para acceder a la variable se tiene que declarar como global dentro de la funcion
    global $frase;

    echo "$frase";
//variable local
    $year = 2021;
    echo "<h1>$year</h1>";

    return $year;
}

echo HolaMundo();

// Ejemplo de funciones variables
function buenosDias() {
    echo "<h1>Función que da los Buenos Dias</h1>";
}

function buenasTardes() {
    echo "<h1>Función que da las Buenas Tardes</h1>";
}

function buenasNoches() {
    echo "<h1>Función que da las Buenas Noches</h1>";
}

//$horario = "buenosDias";
$horario = "buenasTardes";
//$horario = "buenasNoches";
echo $horario();

$horario = "Noches";
$miFuncion = "buenas" . $horario;
echo "Forma concatenada";
echo $miFuncion();


