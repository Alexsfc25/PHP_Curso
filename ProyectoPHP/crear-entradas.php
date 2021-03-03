<?php
require_once 'includes/redirect.php';
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h2>
        Crear Categorías
    </h2>
    <p>Añade nuevas entradas al blog para que los usuarios puedan leerlas </p>
    <br />
    <form class="fcategoria" action="guardar-entrada.php" method="post">
        <label for="titulo">Titulo de la Entrada:</label>
        <input type="text" name="titulo" id="titulo">
        <?php
        echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : "";
        ?>
        <label for="descripcion">Descripción:</label>
        <textarea type="text" name="descripcion" id="descripcion"></textarea>
        <?php
        echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : "";
        ?>
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria">
            <?php
            $categorias = getCategorias($db);
            if (!empty($categorias)) :
                while ($categoria = mysqli_fetch_assoc($categorias)) :
            ?>
                    <option value="<?= $categoria['id'] ?>"><?= ucfirst(mb_strtolower($categoria['nombre'])) ?></option>
            <?php
                endwhile;
            endif;
            ?>
        </select>
        <?php
        echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : "";
        ?>
        <input type="submit" value="Guardar">
    </form>
    <?php
    borrarErrores();
    ?>
</div>
<?php
require_once 'includes/pie.php';
?>