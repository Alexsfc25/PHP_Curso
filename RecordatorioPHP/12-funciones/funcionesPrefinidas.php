<?php

//debuggear
$nombre = "Alejandro";
var_dump($nombre);
//fechas
echo date("d-M-Y");
echo '<br/>';
echo time();

//matematicas
echo '<br/>';
echo 'Raiz cuadrada de 102= ' . sqrt(102);
echo '<br/>';
echo 'Número aleatorio= ' . rand();
echo '<br/>';
echo 'Número aleatorio entre 10 y 100= ' . rand(10, 100);
echo '<br/>';
echo 'Funcion que da el número PI ' . pi();
echo '<br/>';
echo 'Función que redondea un número  ' . round(21.3231424, 2);
echo '<br/>';

//mas funciones generales
//Función para obtener el tipo de variable
echo gettype($nombre);

echo '<br/>';

//Funciones para saber si una variable es de cierto tipo
if (is_string($nombre)) {
    echo '<br/>';
    echo "La variable nombre es del tipo " . gettype($nombre);
}
if (!is_float($nombre)) {
    echo '<br/>';
    echo "La variable nombre no es del tipo float, es del tipo " . gettype($nombre);
}

//Función para saber si existe una variable

echo '<br/>';
if (isset($nombre)) {
    echo 'La variable existe';
} else {
    echo ' La variable $edad no existe';
}
echo '<br/>';
$frase = "      Hola Mundo       ";
echo var_dump(trim($frase));

//Eliminar variables
$year = 2021;
unset($year);
var_dump($year);
echo '<br/>';

$texto = "";
if (empty($texto)) {
    echo "La variable texto esta vacía";
} else {
    echo 'La variable tiene contenido';
}
echo '<br/>';
echo '<br/>';

//Ordenar array por nombre
$words = array('atención', 'Alabar', 'pedro', 'Álava', 'Apero', 'ale');
setlocale(LC_COLLATE, 'ES');
sort($words, SORT_LOCALE_STRING);

foreach ($words as $word) {
    echo $word . "<br/>";
}
echo '<br/>';
$con = "1244134";
//función para contar caracteres o elementos de un array
echo strlen($word);
echo '<br/>';
echo "Funcion que da la longitud de una cadena  " . strlen($con);

echo '<br/>';
//Función para encontrar caracter
$text = "Hola Mundo";
echo "Función que busca la posición de un carácter dado " . strpos($text, "M");
//remplazar palabras en un string
echo '<br/>';
echo "Función que remplaza una palabra por otra " . str_replace("Mundo", "Alejandro", $text);
echo '<br/>';
//Convertir string a mayusculas o minusculas 
echo 'Frase mayus ' . strtoupper($frase);
echo '<br/>';
echo 'Frase minu ' . strtolower($frase);
