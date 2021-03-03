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
    <h2>
        Entradas de <?= $categoria_id['nombre'] ?>
    </h2>
    <?php
    $entradas = getEntradas($db, null, $_GET['id']);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :   ?>
            <article class="entrada">
                <h3>
                    <a href="#">
                        <?= $entrada['titulo'] ?>
                    </a>
                </h3>
                <span class="date"><?= $entrada['categoria'] . " | " . $entrada['fecha'] ?></span>
                <p>
                    <?= substr($entrada['descripcion'], 0, 190) . "..." ?>
                </p>
            </article>
    <?php
        endwhile;
    endif;
    ?>

</div>

</div>
<!-- Pie de Página -->
<?php
require_once 'includes/pie.php';
?>