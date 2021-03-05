<?php

require_once './clases.php';
$persona = new Persona();
$persona->setNombre("Alejandro");
var_dump($persona);
$informatico = new Informatico();
$informatico->setAltura(1.76);
//$informatico->sabeLenguajes("HTML,Java,CSS,PHP,JS");
var_dump($informatico);
$tecnico = new TecnicoRedes();
var_dump($tecnico);
