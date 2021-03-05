<?php

class Configuracion{

    function __construct() {
        
    }

    public static $color;
    public static $newsletter;
    public static $entorno;

    static function getColor() {
        return self::$color;
    }

    static function getNewsletter() {
        return self::$newsletter;
    }

    static function getEntorno() {
        return self::$entorno;
    }

    static function setColor($color): void {
        self::$color = $color;
    }

    static function setNewsletter($newsletter): void {
        self::$newsletter = $newsletter;
    }

    static function setEntorno($entorno): void {
        self::$entorno = $entorno;
    }

}
