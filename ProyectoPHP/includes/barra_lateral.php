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
        <form action="registro.php" method="post">
            <label for="nombreR">Nombre</label>
            <input type="text" name="nombreR" id="nombreR">
            <label for="apellidosR">Apellidos</label>
            <input type="text" name="apellidos" id="apellidosR">
            <label for="emailR">Email</label>
            <input type="email" name="emailR" id="emailR">
            <label for="passwordR">Password</label>
            <input type="password" name="passwordR" id="passwordR">
            <input type="submit" name="submit" value="Registrarse">
        </form>
    </div>
</aside>