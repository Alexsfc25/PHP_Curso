<?php

//variables super globlales 
//variables de servidor
/** @var type $_SERVER */
$method = filter_input(INPUT_SERVER, 'SERVER_ADDR');
echo "<h3>" . $method . "</h3>";
echo "<h3>".'Adress:    ' . $_SERVER['SERVER_ADDR'] . "</h3>";
echo "<h3>".'Server Name:    ' . $_SERVER['SERVER_NAME'] . "</h3>";
echo "<h3>".'Server Software:    ' . $_SERVER['SERVER_SOFTWARE'] . "</h3>";
echo "<h3>".'Server Admin:    ' . $_SERVER['SERVER_ADMIN'] . "</h3>";
echo "<h3>".'Server Port:    ' . $_SERVER['SERVER_PORT'] . "</h3>";
echo "<h3>".'Server Protocol:    ' . $_SERVER['SERVER_PROTOCOL'] . "</h3>";
echo "<h3>".'Web Browser    :    ' . $_SERVER['HTTP_USER_AGENT'] . "</h3>";
echo "<h3>".'Ip:    ' . $_SERVER['REMOTE_ADDR'] . "</h3>";
?>

