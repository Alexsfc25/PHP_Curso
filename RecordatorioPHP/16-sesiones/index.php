<?php

/*
 * Sesión: Almacenar y persistir datos del usuario mientras navega en un sitio web hasta que cierra sesión o cierra el
 * navegador
 */

// Iniciar Sesión ,es necesaria para acceder y guardar variables

session_start();

// Variable normal
$variableNormal = "Cadena de texto";
// Variable de sesión
$_SESSION['variable_persistente'] = "Sesión activa";

echo $variableNormal . "<br/>";

echo $_SESSION['variable_persistente'];
