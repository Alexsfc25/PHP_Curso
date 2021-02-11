<?php
// // abrir archivo
// $archivo = fopen("fichero_de_texto.txt", "a+");

// // leer  archivo

// while (!feof($archivo)) { //Lee todas las lineas del archivo
//     $contenido = fgets($archivo);
//     echo $contenido . "<br/>";
// }

// // Escribir en el archivo

// fwrite($archivo, "\n****Escribiendo en el archivo con función fwrite****");

// // cerrar archivo
// fclose($archivo);

//  Copiar archivos
// copy('fichero_de_texto.txt', 'ficheroCopiado.txt') or die("Error al copiar");

//Renombrar
// rename("FicheroDeTextoModificado", "FicheroDeTextoModificado.txt");

//Eliminar 
// unlink('ficheroCopiado.txt') or die('Error al Borrar');

if (file_exists('FicheroDeTextoModificado1.txt')) {
    echo 'El archivo existe';
} else {
    echo 'El archivo no existe';
}
