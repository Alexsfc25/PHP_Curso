<?php

/*
 * Escribir un programa con PHP que añada valores a un array mientras que su longitud sea menor a 120
 * y mostrarlo en pantallas
 */

$array = array();
for ($i = 1; $i <= 120; $i++) {
    array_push($array, $i);
}
foreach ($array as $value) {
    echo $value . "<br/>";
}
