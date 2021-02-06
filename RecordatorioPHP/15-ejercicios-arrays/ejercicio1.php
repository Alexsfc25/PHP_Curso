<?php

/*
 * Hacer un programa en PHP  que tenga un array con 8 números enteros y que haga lo siguiente:
 * -Recorrerlo y Mostrarlo
 * -Ordenarlo y mostrarlo
 * - Mostrar su longitud
 * - Buscar algún elemento que llegue por URL
 */

$numeros = array(12, 32, 4, 35, 54676, 123, 3, 54);

function imprimirArray($array) {
    $res = "";
    $res .= '<ul>';
    foreach ($array as $numero) {
        $res .= '<li>';
        $res .= "$numero" . "<br/>";
        $res .= '</li>';
    }
    $res .= '</ul>';
    return $res;
}

echo '<h3>Listado de Números</h3>';
echo imprimirArray($numeros);

echo '<h3>Listado de Números Ordenado</h3>';
sort($numeros);
echo imprimirArray($numeros);

echo '<h3>Longitud del array</h3>';
echo '<p>';
echo count($numeros);
echo '</p>';


if (isset($_GET['numero'])) {
    $numero = filter_input(INPUT_GET, 'numero');
    echo "<h3>Busqueda del numero $numero </h3>";
    $busqueda = array_search($numero, $numeros);
    if (!empty($busqueda)) {
        echo "El número $numero " . "se encuentra en la posición " . $busqueda;
    } else {
        echo "El número $numero " . " No se encontro";
    }
}
