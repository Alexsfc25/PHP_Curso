<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Blog de Videojuegos</title>
</head>

<body>
    <!-- Cabecera -->
    <header id="cabecera">
        <!-- Logo -->
        <div id="logo">
            <a href="index.php">
                <h1>
                    Blog de Videojuegos
                </h1>
            </a>
        </div>
        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Categoria 1</a></li>
                <li><a href="index.php">Categoria 2</a></li>
                <li><a href="index.php">Categoria 3</a></li>
                <li><a href="index.php">Categoria 4</a></li>
                <li><a href="index.php">Sobre Nosotros</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
        <!-- <div class="clearfix"></div> -->
    </header>
    <div id="contenedor">
        <!-- Sidebar -->
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
                <form action="register.php" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </aside>
        <!-- Contenido Principal -->
        <div id="principal">
            <h2>
                Últimas Entradas
            </h2>
            <article class="entrada">
                <h3>Titulo de la entrada</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec urna tortor, scelerisque eget facilisis id, condimentum vel sapien. Pellentesque non molestie sem, gravida iaculis leo. Duis tortor neque, mattis eget sem id, ultricies semper tortor. Etiam dapibus sagittis turpis eget ullamcorper. Sed malesuada pretium lectus, auctor vestibulum nisl condimentum quis. In efficitur ipsum in est malesuada rutrum. Mauris eleifend leo sed nulla pellentesque, nec venenatis ex egestas. Cras quis mollis lacus. Aliquam erat volutpat. Nam tincidunt augue vel arcu lacinia, non viverra libero fermentum. Proin mollis pharetra quam quis euismod. Maecenas ac tellus nec nisi efficitur tempor quis et urna. In hac habitasse platea dictumst.
                </p>
            </article>
            <article class="entrada">
                <h3>Titulo de la entrada</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec urna tortor, scelerisque eget facilisis id, condimentum vel sapien. Pellentesque non molestie sem, gravida iaculis leo. Duis tortor neque, mattis eget sem id, ultricies semper tortor. Etiam dapibus sagittis turpis eget ullamcorper. Sed malesuada pretium lectus, auctor vestibulum nisl condimentum quis. In efficitur ipsum in est malesuada rutrum. Mauris eleifend leo sed nulla pellentesque, nec venenatis ex egestas. Cras quis mollis lacus. Aliquam erat volutpat. Nam tincidunt augue vel arcu lacinia, non viverra libero fermentum. Proin mollis pharetra quam quis euismod. Maecenas ac tellus nec nisi efficitur tempor quis et urna. In hac habitasse platea dictumst.
                </p>
            </article>
            <article class="entrada">
                <h3>Titulo de la entrada</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec urna tortor, scelerisque eget facilisis id, condimentum vel sapien. Pellentesque non molestie sem, gravida iaculis leo. Duis tortor neque, mattis eget sem id, ultricies semper tortor. Etiam dapibus sagittis turpis eget ullamcorper. Sed malesuada pretium lectus, auctor vestibulum nisl condimentum quis. In efficitur ipsum in est malesuada rutrum. Mauris eleifend leo sed nulla pellentesque, nec venenatis ex egestas. Cras quis mollis lacus. Aliquam erat volutpat. Nam tincidunt augue vel arcu lacinia, non viverra libero fermentum. Proin mollis pharetra quam quis euismod. Maecenas ac tellus nec nisi efficitur tempor quis et urna. In hac habitasse platea dictumst.
                </p>
            </article>
        </div>

    </div>
    <!-- Pie de Página -->
    <footer id="pie">
        <p>Desarrollado por Alejandro Muñoz &copy; 2021</p>
        <a href='https://pngtree.com/so/seamless'>seamless png from pngtree.com</a>
    </footer>
</body>

</html>