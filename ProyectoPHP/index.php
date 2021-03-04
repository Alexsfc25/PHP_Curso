<?php
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h1>
        Últimas Entradas
    </h1>
    <?php
    $entradas = getEntradas($db, true);
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

    <div id="ver-todas">
        <a href="entradas.php">Ver todas las entradas</a>
    </div>
</div>

</div>
<!-- Pie de Página -->
<?php
require_once 'includes/pie.php';
?>