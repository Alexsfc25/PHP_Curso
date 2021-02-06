<?php
include 'include/cabecera.php'; // permite la inclusión de varios archivos del mismo tipo
include_once 'include/cabecera.php'; //Solo permite incluir el archivo especificado una vez
require 'include/cabecera.php'; // Requiere el archivo para poder ejecutar el contenido de toda la pagina
require_once 'include/cabecera.php'; //  Solo permite incluir el archivo especificado una vez y es requerido para la ejecución de la página
?>
<!--Contenido-->
<div>
    <h2>Esta es la página de inicio</h2>
    <p>Texto de prueba para la página de inicio</p>
    <hr/>
</div>
<?php
include 'include/footer.php';
?>
