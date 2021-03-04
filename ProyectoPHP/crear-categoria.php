<?php
require_once 'includes/redirect.php';
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h1>
        Crear Categorías
    </h1>
    <p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas.</p>
    <br />
    <form class="fcategoria" action="acciones/guardar-categoria.php" method="post">
        <label for="nombre">Nombre de la categoría:</label>
        <input type="text" name="nombre" id="nombre">
        <?php
        echo isset($_SESSION['errores_categoria']) ? mostrarError($_SESSION['errores_categoria'], 'nombre') : "";
        ?>
        <input type="submit" value="Guardar">
        <?php
        borrarErrores();
        ?>
    </form>
</div>
<?php
require_once 'includes/pie.php';
?>