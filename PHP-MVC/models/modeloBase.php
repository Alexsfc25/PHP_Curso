<?php

require_once 'config/database.php';

class ModeloBase {

    public $db;

    public function __construct() {
        $this->db = database::conexion();
    }

    public function getAll($tabla) {
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY ID ASC");
        return $query;
    }

}
