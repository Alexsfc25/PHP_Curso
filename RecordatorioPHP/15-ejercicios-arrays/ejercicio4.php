<?php

/*
 * Crear un script en PHP que tenga 4 variables , una de tipo array, otra de tipo string, otra int y otra boolean y que 
 * imprima un mensaje según el tipo de variable que sea 
 */
$variables = array("hola mundo", true, array("nombre" => "alejandro"), 25);
foreach ($variables as $key => $value) {
    echo "La variable  " . $key . " es del tipo " . gettype($value) . "<br/>";
}

