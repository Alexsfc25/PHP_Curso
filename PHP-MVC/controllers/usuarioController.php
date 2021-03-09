<?php

class UsuarioController {

    public function mostrarUsuarios() {
        require_once 'models/usuario.php';
        $usuario = new Usuario();
        $usuarios = $usuario->getAll();
        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crearUsuario() {
        require_once 'views/usuarios/crear.php';
    }

}
