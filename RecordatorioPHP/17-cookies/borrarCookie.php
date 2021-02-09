<?php

if (isset($_COOKIE['miCookie'])) {
//  Para eliminar una cookie hay que establecer un valor vacio y expirarla
    setcookie('miCookie', '', time() - 3600);
}

header("Location:verCookies.php");
