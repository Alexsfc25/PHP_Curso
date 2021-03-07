<?php

abstract class Ordenador {

    public $encendido;

    abstract public function encender();

    public function apagar() {
        $this->encendido = false;
    }

}

class PcMsi extends Ordenador {

    public $software;

    public function encender() {
        $this->encendido = true;
    }

    public function arrancarSoftware() {
        $this->software = true;
    }

}

$ordenador = new PcMsi();
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);
$ordenador->apagar();
var_dump($ordenador);
