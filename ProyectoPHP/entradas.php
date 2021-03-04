<?php
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h1>
        Todas las Entradas
    </h1>
    <?php
    $entradas = getEntradas($db);
    if (!empty($entradas)) :
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
    endif;
    ?>

</div>

</div>
<!-- Pie de Página -->
<?php
require_once 'includes/pie.php';
?>