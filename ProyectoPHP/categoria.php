<?php
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';
?>

<?php
$categoria_id = getCategoriaById($db, $_GET['id']);
if (!isset($categoria_id['id'])) {
    header("Location:index.php");
}
?>
<?php
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h1>
        Entradas de <?= $categoria_id['nombre'] ?>
    </h1>
    <?php
    $entradas = getEntradas($db, null, $_GET['id']);
    if (!empty($entradas) && mysqli_num_rows($entradas) >= 1) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :   ?>
            <article class="entrada">
                <h2>
                    <a href="entrada.php?id=<?= $entrada['id'] ?>">
                        <?= $entrada['titulo'] ?>
                    </a>
                </h2>
                <span class="date"><?= $entrada['categoria'] . " | " . $entrada['fecha'] ?></span>
                <p>
                    <?= substr($entrada['descripcion'], 0, 190) . "..." ?>
                </p>
            </article>
        <?php
        endwhile;
    else :
        ?>
        <div class="alerta">No hay entradas en esta categoría</div>
    <?php
    endif;
    ?>

</div>

</div>
<!-- Pie de Página -->
<?php
require_once 'includes/pie.php';
?>