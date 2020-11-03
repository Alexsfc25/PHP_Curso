<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Imprimir por pantalla</title>
    </head>
    <body>
        <h1>Curso de PHP </h1> 
        <?="Atajo para un echo (< ? ='Hola' ?>)" ?>
        <!--Titulo de la seccion-->
        <?php
//        Comentarios en PHP
        $nombre='Alejandro';
     /*   Lista de 
        videojuegos*/
        echo '<h3>Listado de compras</h3>';
        echo "<ul>"
        . "<li>Manzanas</li>"
        . "<li>Leche</li>"
        . "<li>Crema</li>"
        . "<li>Pan</li>"
        . "<li>Cereal</li>"
        . "</ul>";
        echo 'Esto es una concatenación (.)'." ".$nombre;
        ?>
    </body>
</html>

