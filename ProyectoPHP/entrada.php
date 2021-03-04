<?php
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
        <?= $entrada_id['titulo'] ?>
    </h1>
    <h2>
        <a href="categoria.php?id=<?= $entrada_id['categoria_id'] ?>">
            <?= $entrada_id['CATEGORIA'] ?>
        </a>
    </h2>
    <h4> <?= $entrada_id['fecha']  ?> | <?= $entrada_id['USUARIO'] ?></h4>
    <p><?= $entrada_id['descripcion'] ?></p>
    <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_id['usuario_id']) : ?>
        <a href="editar-entrada.php?id=<?= $entrada_id['id'] ?>" class="boton b-crear">Editar entrada</a>
        <a href="acciones/borrar-entrada.php?id=<?= $entrada_id['id'] ?>" class="boton b-eliminar">Borrar entrada</a>

    <?php endif;
    ?>

</div>

</div>
<!-- Pie de Página -->
<?php
require_once 'includes/pie.php';
?>