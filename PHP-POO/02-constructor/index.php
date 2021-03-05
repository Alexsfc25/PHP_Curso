<?php
require_once 'coche.php';
$coche1 = new Coche('Azul', 'Chevrolet', 'Corvette', 320, 400);
$coche2 = new Coche('Verde', 'Chevrolet', 'Corvette', 320, 400);
$coche3 = new Coche('Negro', 'Chevrolet', 'Corvette', 320, 400);
$coche4 = new Coche('Morado', 'Chevrolet', 'Corvette', 320, 400);
$coche5 = new Coche('Rojo', 'Chevrolet', 'Corvette Stingray', 420, 600);
// Atributo público
$coche1->color = "Color modificado por ser público";
// Atributo protegido
$coche1->setMarca("modificar marca");
// Atributo privado
var_dump($coche1);
var_dump($coche1->getModelo());
echo $coche1->mostrarInformacion($coche2);
