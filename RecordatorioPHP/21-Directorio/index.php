<?php

if (!is_dir('mi_carpeta')) { //Comprobación si existe una carpeta

    // creacion de carpetas
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
} else {
    echo 'La carpeta ya existe';
}

// Elimina una carpeta
// rmdir('mi_carpeta');

echo "<hr/>";
if ($gestor = opendir('./mi_carpeta')) {

    echo "<h1>Contenido de  la Carpeta</h1>";
    while (($archivo = readdir($gestor)) !== false) { //lee los archivos
        if ($archivo != "." && $archivo != "..")
            echo $archivo . "<br/>";
    }
}
