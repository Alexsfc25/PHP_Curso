<?php
// Conexión BD
$conexion = mysqli_connect("localhost", "root", "", "php_mysql", 3308);
//Comprobar si la conexion es correcta
if (mysqli_connect_errno()) {
    echo 'La conexion a la base de da tas a fallado ' . mysqli_connect_error();
} else {
    echo 'Conexión exitosa con la BD' . "<br/>";
}
//Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta select 
$query = mysqli_query($conexion, "SELECT * FROM NOTAS");

while ($nota = mysqli_fetch_assoc($query)) {
    // var_dump($nota);
    echo $nota['titulo'] . "<br/>";
}
//Insertar en la base de datos
$sql = "INSERT INTO NOTAS VALUES(NULL,'Nota desde PHP','Nota insertada desde PHP ejecutando mysqli_query','green')";
// $insert = mysqli_query($conexion, $sql);
// echo $insert ? 'Datos insertados Correctamente' : 'Error ' . mysqli_error($conexion);
