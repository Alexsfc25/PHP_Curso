<?php

/*
 * Escribir un programa que imprima los cuadrados de los 40 primeros números naturales
 * PD:Utilizar ciclo while  
 */
$numero = 1;
while ($numero <= 40) {
    echo 'El cuadrado de '. $numero.' es    '.pow($numero, 2) . "<br/>";
    $numero++;
}
