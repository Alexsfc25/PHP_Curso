<?php

try {
    if (isset($_GET['id'])) {
        echo 'El id es ' . $_GET['id'];
    } else {
        throw new Exception("Faltan parametros por la url");
    }
} catch (Exception $exc) {
    echo "Ha habido un error: " . $exc->getMessage();
} finally {
    echo "<br/>fin de try-catch";
}


