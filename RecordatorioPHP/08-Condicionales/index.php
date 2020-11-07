<?php

/*
 * === Identico, mismo tipo de dato y contenido
 * <> Diferente
 * !== no Identico
 * 
 */
$color = "blue";
if ($color == 'red') {
    echo 'The color is red';
} else {
    echo 'The color isn\'t red, is ' . $color;
}
$age = 10;
$age2 = 70;
if ($age > 18 && $age2 <= 70) {
    echo "<br>" . 'You can work';
} elseif ($age2 > 70 && $age2 < 80) {
    echo "<br>" . 'You will not be able to work in a few years';
} elseif ($age < 15) {
    echo "<br>" . 'You can\'t work';
}
echo "<br>";
$dia = 7;
switch ($dia) {
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    default:
        echo 'Weekend';
        break;
}
//GOTO
echo "<br>";
goto flag;
echo 'Hi 1';
echo 'Hi 2';
echo 'Hi 3';
echo 'Hi 4';
flag:
echo 'Hello word';
?>