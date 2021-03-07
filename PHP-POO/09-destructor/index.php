<?php

class Usuario {

    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Alejandro";
        $this->email = "alejandro@mail.com";
        echo 'Creando constructor' . "<br/>";
    }

    public function __destruct() {
        echo '<br/>Destruyendo el objeto';
    }

    public function __toString() {
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

}

$usuario = new Usuario();

echo $usuario . "<br/>";
echo $usuario->nombre;
