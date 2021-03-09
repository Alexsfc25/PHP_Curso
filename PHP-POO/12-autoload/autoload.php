<?php

function app_autoload($class) {
//    include "clases/" . $class . '.php';
    require_once "clases/" . $class . '.php';
}

spl_autoload_register('app_autoload');
