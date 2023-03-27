<?php include 'includes/header.php';

// $carrito = array();
// var_dump($carrito);

// util para ver los contenidos de un array
$carrito = ['tablet', 'mobile', 'computadora'];
echo "<pre>";
var_dump($carrito);
echo "</pre>";
// ver un elemento de un array 
echo $carrito[1];

// añada un elemeto en el indicce 3 del arreglo 
$carrito[3] = "Nuevo produtco ...";
//añadir un elemnto al final 

array_push($carrito, 'audifonos');

//añadir un elemento al principio 
array_unshift($carrito, 'smartwatch');
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$clientes = array('cliente 1', 'cliente 2', 'cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';