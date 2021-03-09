<?php

namespace MisClases;
class Categoria {

    public $nombre;
    public $descripcion;

    public function __construct() {
        $this->nombre = "MOBA";
        $this->descripcion = "Juegos MOBA del momento";
    }

}
