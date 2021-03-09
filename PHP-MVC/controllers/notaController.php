<?php

class NotaController {

    public function listar() {
        //Modelo
        require_once 'models/nota.php';
        //lógica Accion del controlador
        $nota = new Nota();
        $nota->setNombre("PHP");
        $nota->setContenido("Hola Mundo");
//        Vista
        require_once 'views/nota/listar.php';
    }

    public function crear() {
        
    }

    public function borrar() {
        
    }

}
