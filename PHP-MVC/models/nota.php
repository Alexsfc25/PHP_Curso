<?php

require_once 'modeloBase.php';

class Nota extends ModeloBase {

    public $nombre;
    public $contenido;

    function getNombre() {
        return $this->nombre;
    }

    function getContenido() {
        return $this->contenido;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setContenido($contenido): void {
        $this->contenido = $contenido;
    }

}
