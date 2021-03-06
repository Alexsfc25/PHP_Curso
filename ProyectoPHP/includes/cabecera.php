<?php
require_once 'conexion.php';
require_once 'includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Blog de Videojuegos</title>
</head>

<body>
    <!-- Cabecera -->
    <header id="cabecera">
        <!-- Logo -->
        <div id="logo">
            <a href="index.php">
                <h1>
                    Blog de Videojuegos
                </h1>
            </a>
        </div>
        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                $categorias = getCategorias($db);
                if (!empty($categorias)) :
                    while ($categoria = mysqli_fetch_assoc($categorias)) :   ?>
                        <li><a href="categoria.php?id=<?= $categoria['id'] ?> "><?= ucfirst(mb_strtolower($categoria['nombre'])) ?></a></li>
                <?php
                    endwhile;
                endif;
                ?>
                <li><a href="index.php">Sobre Nosotros</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
        <!-- <div class="clearfix"></div> -->
    </header>
    <div id="contenedor">
        <?php
        require_once 'includes/barra_lateral.php';
        ?>