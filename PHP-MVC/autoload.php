<?php

function autocargar($claseName) {
    include_once 'controllers/' . $claseName . '.php';
}

spl_autoload_register('autocargar');
