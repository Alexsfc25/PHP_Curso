<?php

class database {

    public static function conexion() {
        $conexion = new mysqli("localhost", "root", "", "notas_master", 3308);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}
