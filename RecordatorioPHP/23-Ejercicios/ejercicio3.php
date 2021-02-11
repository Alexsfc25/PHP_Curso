<?php
// Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones 
// uno para sumar,restar,multiplicar,dividir
$res = null;
if (!empty($_POST['numero1']) && !empty($_POST['numero2'])) {
    $numero1 =  $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    // var_dump($_POST);
    switch ($_POST['operacion']) {
        case 'Sumar':
            $res = ($numero1 + $numero2);
            break;
        case 'Restar':
            $res = ($numero1 - $numero2);
            break;
        case 'Multiplicar':
            $res = ($numero1 * $numero2);
            break;
        case 'Dividir':
            $res = ($numero1 / $numero2);
            break;
    }
} else {
    echo "<h2>Ingresa los números </h2>";
}
// var_dump($_POST);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
</head>

<body>
    <h1>Calculadora en PHP</h1>
    <form action="" method="post">
        <label for="numero1">Número 1</label><br />
        <input type="number" name="numero1" id=""><br />
        <label for="numero2">Número 2</label><br />
        <input type="number" name="numero2" id=""><br /><br />

        <input type="submit" value="Sumar" name="operacion">
        <input type="submit" value="Restar" name="operacion">
        <input type="submit" value="Multiplicar" name="operacion">
        <input type="submit" value="Dividir" name="operacion">
    </form>

    <h3>El resultado es : <?php echo ($res != null) ?  $res : "0"; ?></h3>

</body>

</html>