<?php

//Recordando variables
$mi_nombre = "Hola mundo";
//Metodo para obtener el tipo de variable
echo "tipo de dato " . gettype($mi_nombre) . ' en la variable mi_nombre' . $mi_nombre;
//Debuggear variables
$variablearreglo[] = "What is the purpose of static constructors?";
$variablearreglo[] = "What is the purpose of static constructors?";
echo var_dump($variablearreglo);
//Constantes
define('cons', 'Definición de Constantes');
echo cons . "<br>";
//Constantes Predefinidas
echo "Constante de SO " . PHP_OS;
echo '<br/>Constante de version de PHP' . PHP_VERSION;
echo '<br/>Linea en la que se esta  ' . __LINE__;
$vara = 5;
$sum = 2;
$vara -= $sum;
echo '<br>+=' . $vara . "<br>";
$vara = + $sum;
echo '=+' . $vara;

function HolaMundo() {
    echo __FUNCTION__;
}
?>

