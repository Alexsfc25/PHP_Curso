<?php

//$method = filter_input(INPUT_GET, 'Name');
//echo "<h2>" . $_GET['Name'] . "<h2>";
//echo "<h2>" . $_GET['LastName'] . "<h2>";
//echo "<h2>" . $method . "<h2>";
//echo "<h2>" . var_dump($_GET) . "<h2>";
$method = filter_input(INPUT_POST, 'Name');
echo "<h2>" . $_POST['Name'] . "<h2>";
echo "<h2>" . $_POST['LastName'] . "<h2>";
echo "<h2>" . $method . "<h2>";
echo "<h2>" . var_dump($_POST) . "<h2>";
?>

