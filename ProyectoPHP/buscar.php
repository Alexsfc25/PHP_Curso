<?php
if (!isset($_POST['busqueda'])) {
    header("Location:index.php");
}
?>
<?php
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h1>
        Busqueda: <?= filter_var($_POST['busqueda'], FILTER_SANITIZE_STRING) ?>
    </h1>
    <?php
    $entradas = getEntradas($db, null, null, $_POST['busqueda']);

    if (!empty($entradas) && mysqli_num_rows($entradas) >= 1) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
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