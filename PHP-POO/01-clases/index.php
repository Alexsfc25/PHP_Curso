<?php
//Definir una clase
class Coche
{
    //atributos o propiedades de la clase
    public $color = "red";
    public $marca = "Chevrolet";
    public $modelo = "Corvette";
    public $velocidad = 320;
    public $potencia = 650;
    // Métodos de la clase

    public function getColor()
    {
        return $this->color;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }
}

//Instanciar la clase o crear objeto
$coche = new Coche();
var_dump($coche);

//Usar métodos
echo $coche->getVelocidad() . "<br/>";
$coche->setColor("Morado");
echo 'el color del coche es: ' . $coche->getColor() . "<br/>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
echo 'La velocidad del coche es de: ' . $coche->getVelocidad() . "<br/>";
$coche->frenar();
echo 'La velocidad del coche es de: ' . $coche->getVelocidad() . "<br/>";
$coche2 = new Coche();
$coche->setColor("azul");
var_dump($coche);
$coche2->setModelo("Camaro");
var_dump($coche2);
