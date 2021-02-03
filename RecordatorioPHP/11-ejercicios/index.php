<?php

/*
 * Ejercicio 1. Crear dos variables "país" y "continente" y mostrar su valor por pantalla(imprimir)
 * Poner en un comentario que tipo de dato tienen */

$pais = "México"; //string
$continente = "América"; //string
echo "La variable país contiene $pais y la variable continente contiene $continente";
echo "<br/>El tipo de dato de la variable país es " . gettype($pais)
        . 'y la variable continente es del tipo ' . gettype($continente);
