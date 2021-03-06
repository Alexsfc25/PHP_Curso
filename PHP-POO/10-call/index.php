<?php

class Persona {

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    // Es llamado cuando no existe el método al que se esta haciendo referencia
    public function __call($name, $arguments) {
//         $name; Nombre del método que esta siendo llamado
//         $arguments; Argumentos que el método tiene 

        $prefix_metodo = substr($name, 0, 3);

        if ($prefix_metodo == "get") {
            $nombre_metodo = substr(strtolower($name), 3);
            if (!isset($this->$nombre_metodo)) {
                return "El método que estas invocando no existe";
            }
            return $this->$nombre_metodo;
        } else {
            return "El método que estas invocando no existe";
        }
    }

}

$persona = new Persona("Alejandro", 24, "CDMX");
echo $persona->getNombre() . "<br/>";
echo $persona->getCiudad() . "<br/>";
echo $persona->getEdad() . "<br/>";
echo $persona->getEmail() . "<br/>";

