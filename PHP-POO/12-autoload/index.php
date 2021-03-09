<?php

require_once './autoload.php';

//$usuario = new Usuario();
//echo $usuario->nombre . "<br/>";
//echo $usuario->email . "<br/>";
//
//$categoria = new Categoria();
//echo $categoria->nombre . "<br/>";
//Espacios de Nombre y Paquetes  
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {

    public $usuario;
    public $entrada;
    public $categoria;

    function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setEntrada($entrada): void {
        $this->entrada = $entrada;
    }

    function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    function informacion() {
        echo __CLASS__ . '<br/>';
        echo __METHOD__ . '<br/>';
        echo __FILE__ . '<br/>';
//        echo __TRAIT__ . '<br/>';
        echo __NAMESPACE__. '<br/>';
    }

}

//Objeto Principal
$principal = new Principal();
//var_dump($principal->usuario);

$metodos = get_class_methods($principal);
$busqueda = array_search("setUsuarios", $metodos);
var_dump($busqueda);

//Objeto de otro paquete
//primera forma
//$usuarioAdm = new PanelAdministrador\Usuario();
//segunda forma
$usuarioAdm = new UsuarioAdmin();
//var_dump($usuarioAdm);
//Comprobar si existe una clase
$class = class_exists("PanelAdministrador\Usuario");
echo $class ? 'La clase Existe' : 'La clase No Existe';
echo '<br/>';
$principal->informacion();
