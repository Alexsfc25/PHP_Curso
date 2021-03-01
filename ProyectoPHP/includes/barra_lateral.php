<?php
require_once 'includes/helpers.php';
?>
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Entrar">
        </form>
    </div>
    <div id="register" class="bloque">

        <h3>Registrate</h3>
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
        <form action="registro.php" method="post">
            <label for="nombreR">Nombre</label>
            <input type="text" name="nombreR" id="nombreR">
            <?php
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : "";
            ?>
            <label for="apellidosR">Apellidos</label>
            <input type="text" name="apellidosR" id="apellidosR">
            <?php
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : "";
            ?>
            <label for="emailR">Email</label>
            <input type="email" name="emailR" id="emailR">
            <?php
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : "";
            ?>
            <label for="passwordR">Password</label>
            <input type="password" name="passwordR" id="passwordR">
            <?php
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : "";
            ?>
            <input type="submit" name="submit" value="Registrarse">
        </form>
        <?php
        borrarErrores();
        ?>
    </div>
</aside>