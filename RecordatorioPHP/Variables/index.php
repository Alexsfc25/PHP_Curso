<?php

//Recordando variables
$mi_nombre = "Hola mundo";
//Metodo para obtener el tipo de variable
echo "tipo de dato " . gettype($mi_nombre) . ' en la variable mi_nombre' . $mi_nombre;
//Debuggear variables
$variablearreglo[] = "asdfgWhat is the purpose of static constructors?";
$variablearreglo[] = "asdfgWhat is the purpose of static constructors?";
echo var_dump($variablearreglo);
//Constantes
define('cons', 'Definición de Constantes');
echo cons . "<br>";
//Constantes Predefinidas
echo "Constante de SO " . PHP_OS;
echo '<br/>Constante de version de PHP' . PHP_VERSION;
echo '<br/>Linea en la que se esta  ' . __LINE__;

function HolaMundo() {
    echo __FUNCTION__;
}
?>

