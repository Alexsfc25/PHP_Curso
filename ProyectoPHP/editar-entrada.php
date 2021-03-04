<?php
require_once 'includes/redirect.php';
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';
?>

<?php
$entrada_id = getEntradaById($db, $_GET['id']);
if (!isset($entrada_id['id'])) {
    header("Location:index.php");
}
?>
<?php
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h1>
        Editar Entradas
    </h1>
    <p>Editar entrada <?= $entrada_id['titulo'] ?> </p>
    <br />
    <form class="fcategoria" action="acciones/guardar-entrada.php?editar=<?= $entrada_id['id'] ?>" method="post">
        <label for="titulo">Titulo de la Entrada:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $entrada_id['titulo'] ?>">
        <?php
        echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : "";
        ?>
        <label for="descripcion">Descripción:</label>
        <textarea type="text" name="descripcion" id="descripcion"><?= $entrada_id['descripcion'] ?></textarea>
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
                    <!-- 
                        selecciona la categoria según el id de la entrada seleccionada  
                        <?= ($categoria['id'] == $entrada_id['categoria_id']) ? 'selected="selected"' : "" ?> 
                     -->
                    <option value="<?= $categoria['id'] ?>" <?= ($categoria['id'] == $entrada_id['categoria_id']) ? 'selected="selected"' : "" ?>>
                        <?= ucfirst(mb_strtolower($categoria['nombre'])) ?>
                    </option>
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