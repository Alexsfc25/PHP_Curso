<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Validar Formularios PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Validar Formulario</h1>
        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 1) {
                echo "<strong style='color:red;'>Rellena todos los campos</strong>";
            }

            if ($error == "nombre") {
                echo "<strong style='color:red;'>El campo $error no es correcto</strong>";
            }
            if ($error == "apellido") {
                echo "<strong style='color:red;'>El campo $error no es correcto</strong>";
            }
            if ($error == "edad") {
                echo "<strong style='color:red;'>El campo $error no es correcto</strong>";
            }
            if ($error == "email") {
                echo "<strong style='color:red;'>El campo $error no es correcto</strong>";
            }
            if ($error == "contrasena") {
                echo "<strong style='color:red;'>El campo $error no es correcto</strong>";
            }
        }
        ?>
        <form method="POST" action="validar-Formulario.php">
            <label for="nombre">Nombre: </label><br/>
            <input type="text" name="nombre" value=""  id="nombre" /><br/>
            <label for="apellidos">Apellidos: </label><br/>
            <input type="text" name="apellidos" value=""  id="apellidos"  /><br/>
            <label for="edad">Edad </label><br/>
            <input type="number" name="edad" value=""  id="edad" ><br/>
            <label for="email">Email: </label><br/>
            <input type="email" name="email" value=""  id="email" /><br/>
            <label for="contrasena">Contraaseña: </label><br/>
            <input type="password" name="contrasena" value=""  id="contrasena" /><br/>
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
