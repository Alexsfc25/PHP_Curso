<?php
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h2>
        Últimas Entradas
    </h2>
    <?php
    $entradas = getEntradas($db, true);
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

    <div id="ver-todas">
        <a href="entradas.php">Ver todas las entradas</a>
    </div>
</div>

</div>
<!-- Pie de Página -->
<?php
require_once 'includes/pie.php';
?>