<?php

if (isset($_POST['descripcion']) && isset($_POST['titulo'])) {
    echo "<h1>" . $_POST ['titulo'] . "</h1>";
    echo "<p>" . $_POST['descripcion'] . "</p>";
}