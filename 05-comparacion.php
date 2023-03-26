<?php include 'includes/header.php';

$nuemro1=20;
$nuemro2=20;
$nuemro3=20;
$nuemro4="30";

var_dump($nuemro1 > $nuemro2);
echo "<br/>";

var_dump($nuemro1 < $nuemro2);
echo "<br/>";

var_dump($nuemro1 >= $nuemro2);
echo "<br/>";

var_dump($nuemro1 <= $nuemro2);
echo "<br/>";

var_dump($nuemro2 == $nuemro3);
echo "<br/>";

var_dump($nuemro2 === $nuemro4);
echo "<br/>";

// -1 si izquierda  es menor , o si es igual 1 a la izquierda es mayor

var_dump($nuemro1 <=> $nuemro2);
echo "<br>";
include 'includes/footer.php';