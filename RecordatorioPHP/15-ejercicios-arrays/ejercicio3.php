<?php

/*
 * Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto en minuscula 
 * y mostarlo en mayuscula y negrita 
 */

$text = "";

if (empty($text)) {
    $text = strtolower("El texto esta vacio");
    echo "<b>" . strtoupper($text) . "</b>";
} else {
    echo "$text";
}