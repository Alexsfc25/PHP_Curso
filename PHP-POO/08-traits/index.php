<?php
//Clase en común que se puede utilizar
trait Utilidades {

    public function mostrarNombre() {
        echo "<h1>El nombre es " . $this->nombre . "</h1>";
    }

}

class Coche {

    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona {

    use Utilidades;

    public $nombre;
    public $apellidos;

}

class Videojuego {

    use Utilidades;

    public $nombre;
    public $genero;

}

$coche = new Coche();
$coche->nombre = "Corvette";
$coche->mostrarNombre();
$persona = new Persona();
$persona->nombre = "Alejandro";
$persona->mostrarNombre();
$videojuego = new Videojuego();
$videojuego->nombre = "Halo";
$videojuego->mostrarNombre();

