<?php

/*
 *  Hacer un programa que muestre todos los numeros entre dos números que lleguen por url 
 */
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = (int) filter_input(INPUT_GET, 'numero1');
    $numero2 = (int) filter_input(INPUT_GET, 'numero2');
} else {
    $numero1 = 1;
    $numero2 = 1;
}
if ($numero1 < $numero2) {
    for ($i = $numero1; $i <= $numero2; $i++) {
        echo "<p>$i</p>";
    }
} else {
    for ($i = $numero2; $i <= $numero1; $i++) {
        echo "<p>$i</p>";
    }
}