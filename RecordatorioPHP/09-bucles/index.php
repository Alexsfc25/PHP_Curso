<?php

// Bucle while
$numero = 0;

while ($numero <= 100) {
    echo $numero == 100 ? "$numero" : "$numero, ";
    $numero++;
}

/** @var type $_GET */
if (isset($_GET['numero'])) {
    $numero = (int) filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_STRING);
} else {
    $numero = 1;
}

echo "<h1>Table de multiplicar del número $numero</h1>";
$contador = 1;

while ($contador <= 10) {
    echo "$numero X $contador = " . ($numero * $contador) . "<br/>";
    $contador++;
}
echo '<hr/>';
$edad = 11;
$contador2 = 1;
do {
    echo "Tienes $edad años , el contador es $contador2 <br/>";
    $contador2++;
} while ($edad >= 18 && $contador2 <= 10);
