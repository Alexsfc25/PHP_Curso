<?php

//Operadores aritmeticos
$num1 = 5;
$num2 = 3;
echo '<h2>Operadores aritmeticos</h2>';
echo 'Suma ' . $num1 . ' + ' . $num2 . '=   ' . ($num1 + $num2) . '<br>';
echo 'Resta ' . $num1 . ' - ' . $num2 . '=   ' . ($num1 - $num2) . '<br>';
echo 'Multiplicación ' . $num1 . ' * ' . $num2 . '=   ' . ($num1 * $num2) . '<br>';
echo 'División ' . $num1 . ' / ' . $num2 . '=   ' . ($num1 / $num2) . '<br>';
echo 'Resto ' . $num1 . ' % ' . $num2 . '=   ' . ($num1 % $num2) . '<br>';
//Operadores de incremento y decremento
$year = 2020;

//incremento
echo '<br>Valor Inicial     ' . $year;
echo '<br>Valor al realizar Incremento 2020++ ' . $year++;
echo '<br>Nuevo Valor Incrementado    ' . $year;
//preincremento
echo '<br>Valor al realizar Preincrementado ++2020          ' . ++$year;
echo '<br>Nuevo Valor Preincrementado     ' . $year;
//decremento    
echo '<br>Valor Inicial     ' . $year;
echo '<br>Valor al realizar decremento 2020-- ' . $year--;
echo '<br>Nuevo Valor decremento    ' . $year;
//predecremento
echo '<br>Valor al realizar Predecrementado --2020 ' . --$year;
echo '<br>Nuevo Valor Predecrementado     ' . $year;
//Operadores de Asignación
$age = 40;
echo "<br>" . $age;
echo "<br>" . ($age += 5);
echo "<br>" . ($age -= 5);
echo "<br>" . ($age *= 5);
echo "<br>" . ($age /= 5);
echo var_dump($age);

?>

