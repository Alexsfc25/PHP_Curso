<h1>Listado de Usuarios</h1>
<?php while ($usuario = $usuarios->fetch_object()): ?>

    <?= $usuario->nombre . ' ' . $usuario->apellidos ?> <?= $usuario->email ?> <br/>

<?php endwhile; ?>
 