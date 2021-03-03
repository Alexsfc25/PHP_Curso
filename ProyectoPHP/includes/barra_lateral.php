<aside id="sidebar">

    <?php if (isset($_SESSION['usuario'])) : ?>
        <div id="usuario-logeado" class="bloque">
            <h3>
                <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos'] ?>
            </h3>
            <!-- BOTONES -->
            <a href="crear-entradas.php" class="boton b-crear">Crear Entradas</a>
            <a href="crear-categoria.php" class="boton b-crearCa">Crear Categorias</a>
            <a href="mis-datos.php" class="boton b-datos">Mis Datos</a>
            <a href="cerrar.php" class="boton b-cerrar">Cerrar Sesión</a>
        </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['usuario'])) : ?>
        <div id="login" class="bloque">
            <h3>Identificate</h3>
            <?php if (isset($_SESSION['error_login'])) : ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['error_login'] ?>
                </div>
            <?php endif; ?>
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
            <!-- Mostrar errores -->
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
    <?php endif; ?>

</aside>