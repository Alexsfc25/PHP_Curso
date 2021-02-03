<?php

/*
 * Recoger 2 números por URL y hacer todas las operaciones básicas de una calculadora(suma,resta,multiplicación, división)
 * de esos dos números 
 */

if (isset(filter_var($_GET['numero1'], FILTER_SANITIZE_STRING)) && isset(filter_var($_GET['numero2'], FILTER_SANITIZE_STRING))) {
    $numero1 = (int) filter_input(INPUT_GET, 'numero1');
    $numero2 = (int) filter_input(INPUT_GET, 'numero2');
    echo "La suma de $numero1 + $numero2    = " . ($numero1 + $numero2);
    echo "<br/>La resta de $numero1 - $numero2    = " . ($numero1 - $numero2);
    echo "<br/>La multiplicación de $numero1 * $numero2    = " . ($numero1 * $numero2);
    echo "<br/>La división de $numero1 / $numero2    = " . ($numero1 / $numero2);
} else {
    echo '<h1>Inserta correctamente los valores en la url</h1>';
}
