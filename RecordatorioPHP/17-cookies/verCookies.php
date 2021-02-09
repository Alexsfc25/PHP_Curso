<?php
if (isset($_COOKIE['miCookie'])) {
    echo $_COOKIE['miCookie'];
} else {
    echo 'No existen cookies';
}
if (isset($_COOKIE['Cookie1Year'])) {
    echo "<br/>";
    echo $_COOKIE['Cookie1Year'];
} else {
    echo 'No existen cookies';
}
echo '<br/>';
?>
<a href="crearCookies.php">Crear cookies</a>
<a href="borrarCookie.php">Borrar cookies</a>