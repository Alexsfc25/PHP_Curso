<?php
//Definir una clase
class Coche
{
    //atributos o propiedades de la clase
    //Public Se puede acceder a este atributo desde cualquier lugar
    public $color;
    //Se puede acceder desde la clase que lo define y desde clases que hereden esta clase
    protected $marca;
    //Solo se puede acceder desde esta clase
    private $modelo;
    public $velocidad;
    public $potencia;

    /**
     * Class constructor.
     public function __construct()
     {
         $this->color = 'Rojo';
         $this->marca = 'Chevrolet';
         $this->modelo = 'Corvette';
         $this->velocidad = 320;
         $this->potencia = 650;
        }
        
     */
    /**
     * Class constructor.
     */
    public function __construct($color, $marca, $modelo, $velocidad, $potencia)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->potencia = $potencia;
    }

    // Métodos de la clase

    public function getColor()
    {
        return $this->color;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
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
    public  function mostrarInformacion(Coche $coche)
    {
        $informacion = "<h1>Información del coche</h1>";
        $informacion .= "Color: " . $coche->color;
        $informacion .= "<br/>Modelo: " . $coche->modelo;
        $informacion .= "<br/>Velocidad: " . $coche->velocidad;
        return $informacion;
    }
}
