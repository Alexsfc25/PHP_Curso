<?php

class NotaController {

    public function listar() {
        //Modelo
        require_once 'models/nota.php';
        //lógica Accion del controlador
        $nota = new Nota();
        $notas = $nota->getAll('notas');
//        Vista
        require_once 'views/nota/listar.php';
    }

    public function crear() {
        require_once 'models/nota.php';
        $nota = new Nota();

        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota 4");
        $nota->setDescripcion("Nota por medio de PHP");
        $guardar = $nota->guardar();
        header("Location:index.php?controller=Nota&action=listar");
    }

    public function borrar() {
        
    }

}
