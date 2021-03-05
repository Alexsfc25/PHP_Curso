<?php

//herencia : capacidad de compartir atributos y metodos entre clases

class Persona {

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getAltura() {
        return $this->altura;
    }

    function getEdad() {
        return $this->edad;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }

    function setEdad($edad): void {
        $this->edad = $edad;
    }

    public function hablar() {
        return "Hola Humano";
    }

    public function caminar() {
        return "La persona esta caminando...";
    }

}

class Informatico extends Persona {

    public $lenguajes;
    public $experienciaProgramador;

    public function __construct() {
        $this->lenguajes = "HTML,CSS,JS";
        $this->experienciaProgramador = 4;
    }

    public function sabeLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }

    public function programar() {
        return "Soy un programador";
    }

    public function repararOrdenador() {
        return "Reparando ordenador";
    }

    public function hacerOfimatica() {
        return "Estoy escribiendo en word";
    }

}

class TecnicoRedes extends Informatico {

    public $auditarRedes;
    public $experienciaRedes;

    public function __construct() {
        parent::__construct();
        $this->auditarRedes = 'experto';
        $this->experienciaRedes = 5;
    }

    public function auditoria() {
        return "Estoy auditando redes";
    }

}
