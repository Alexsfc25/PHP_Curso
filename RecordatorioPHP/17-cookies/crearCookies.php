<?php
/*
 * Cookie: Es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de recordar datos}
 * o rastrear el comportamiento del mismo en la web
 */

//Crear cookie
//setcookie("nombre", "valor que solo puede ser texto", caducidad,ruta, dominio);
//Cookie básica
setcookie("miCookie", "Valor de la Cookie");

//Cookie con expiración
setcookie("Cookie1Year", "Valor de cookie de 1 año", time() + (60 * 60 * 24 * 365));
header("Location:verCookies.php"); //redirecciona a pagina deseada
?>
<!--<a href="verCookies.php">Ver cookies</a>-->