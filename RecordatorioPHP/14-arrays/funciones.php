<?php

$cantantes = array('Canserbero', '2Pac', 'Biggie', 'Charles Ans');
$words = array('atención', 'Alabar', 'pedro', 'Álava', 'Apero', 'ale');
$numeros = array(1, 2, 3, 45, 6, 7, 8, 12);
// Ordenar array
setlocale(LC_COLLATE, 'ES');
sort($words, SORT_LOCALE_STRING);
foreach ($words as $word) {
    echo $word . "<br/>";
}

asort($cantantes);
var_dump($cantantes);
asort($numeros);
var_dump($numeros);

// Añadir elementos a el array
echo 'Agregar ';
array_push($cantantes, 'Nanpa Básico');
$cantantes[] = 'Tren Lokote';

var_dump($cantantes);
//elimina el último elemento de un array
array_pop($cantantes);
var_dump($cantantes);

//elimina un elemento en especifico de un array
unset($cantantes[2]);
var_dump($cantantes);

// elemento ramdom de un array

$indiceRandom = array_rand($cantantes);
echo "Elemento seleccionado de manera aleatoria " . $cantantes[$indiceRandom];

// Array en reversa
echo '<br/>';
echo '<h3>Invertir orden del array</h3>';
$arrayInverso = array_reverse($cantantes);
var_dump($cantantes);
var_dump($arrayInverso);

// Buscar elemento dentro de un array

$resultado = array_search("2Pac", $cantantes);
var_dump($resultado);

//  Contar número de elementos
echo "Tamaño del array " . count($cantantes) . "<br/>";
echo "Tamaño del array " . sizeof($cantantes);
