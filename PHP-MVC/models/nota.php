<?php

require_once 'modeloBase.php';

class Nota extends ModeloBase {

    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function __construct() {
        parent::__construct();
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setUsuario_id($usuario_id): void {
        $this->usuario_id = $usuario_id;
    }

    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function guardar() {
        $query = "INSERT INTO NOTAS(USUARIO_ID,TITULO,DESCRIPCION,FECHA) VALUES({$this->usuario_id},'{$this->titulo}','{$this->descripcion}',CURDATE())";
        $guardar = $this->db->query($query);
        return $guardar;
    }

}
