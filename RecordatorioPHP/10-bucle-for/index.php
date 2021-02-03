<?php

$resulatado = 0;

for ($i = 1; $i <= 100; $i++) {
    echo "<p>$resulatado + $i = " . ($resulatado += $i) . "</p>";
}
echo "<h1> El resultado es : $resulatado</h1>";
echo "<h1> Tabla de multiplicar con ciclo for</h1>";
if (isset($_GET['numero'])) {
    $numero = (int) filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_STRING);
} else {
    $numero = 1;
}
for ($i = 1; $i <= 10; $i++) {
    if ($numero == 25) {
        echo "Has seleccionado el número secreto $numero";
        break;
    }
    echo "$numero X $i = " . ($numero * $i) . "<br/>";
}