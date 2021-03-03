<?php
require_once 'includes/redirect.php';
require_once 'includes/cabecera.php';
?>
<div id="principal">
    <h2>
        Mis Datos
    </h2>
    <?php
    if (isset($_SESSION['completado'])) :
    ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php
    elseif (isset($_SESSION['errores']['general'])) :
    ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php
    endif;
    ?>
    <form action="actualizar-usuario.php" method="post">
        <label for="nombreR">Nombre</label>
        <input type="text" name="nombreR" id="nombreR" value="<?= $_SESSION['usuario']['nombre'] ?>">
        <?php
        echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : "";
        ?>
        <label for="apellidosR">Apellidos</label>
        <input type="text" name="apellidosR" id="apellidosR" value="<?= $_SESSION['usuario']['apellidos'] ?>">
        <?php
        echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : "";
        ?>
        <label for=" emailR">Email</label>
        <input type="email" name="emailR" id="emailR" value="<?= $_SESSION['usuario']['email'] ?>">
        <?php
        echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : "";
        ?>
        <input type="submit" name="submit" value="Actualizar">
    </form>
    <?php
    borrarErrores();
    ?>
</div>

<?php
require_once 'includes/pie.php';
?>