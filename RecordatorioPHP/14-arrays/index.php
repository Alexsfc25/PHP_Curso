<?php

$peliculas = array('Nemo', 'Hercules', 'Lilo y Stitch', 'Batman');
$cantantes = array('Canserbero', '2Pac', 'Biggie', 'Charles Ans');
$personas = array(
    'nombre' => 'Alejandro',
    'apellidos' => 'Muñoz Castañeda',
    'edad' => 24
);
var_dump($peliculas);
var_dump($cantantes);
var_dump($personas);
var_dump($personas['nombre']);

echo "$cantantes[1]<br/>";
echo "$cantantes[3]<br/>";
echo "$peliculas[3]<br/>";

echo $personas['apellidos'] . "<br/>";
echo $personas['edad'];

echo "<h2>Listado de Peliculas</h2>";
echo '<ul>';
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>$peliculas[$i]</li>";
}
echo '</ul>';

echo "<h2>Listado de Cantantes</h2>";
echo '<ul>';
foreach ($cantantes as $key => $cantante) {
    echo "<li> $key - $cantante</li>";
}
echo '</ul>';

//Arrays Multidimensionales (Matrices)

$contactos = array(
    array(
        'nombre' => 'Alejandro',
        'email' => 'alejandro@qmail.com'
    ),
    array(
        'nombre' => 'Pedro',
        'email' => 'pedro@gmail.com'
    ),
    array(
        'nombre' => 'Ernesto',
        'email' => 'erni@gmail.com'
    ),
    array(
        'nombre' => 'Fernanda',
        'email' => 'fernanda@gmail.com'
    ),
);
var_dump($contactos);
echo $contactos[0]['nombre'] . "<br/>";
echo $contactos[3]['email'] . "<br/>";
echo '<h2>Listado de Contactos en un array multidimensional</h2>';
echo '<ul>';
foreach ($contactos as $key => $contacto) {
    echo "<li>" . $contacto['nombre'] . " - " . $contacto['email'] . "</li>";
}
echo '</ul>';
