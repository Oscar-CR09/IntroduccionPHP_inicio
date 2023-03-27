<?php include 'includes/header.php';

$clientes = [];
$clientes = array();
$clientes3 = array('Pedro', 'Juan','karen');

//Revisa si un arreglo esta vacio
var_dump(empty ($clientes));
var_dump(empty ($clientes3));
var_dump(empty ($clientes2));

// Isset -revisar si un arreglo esta creado o una propiedad esta definida

echo "<br>";
var_dump(isset ($clientes4));
var_dump(isset ($clientes));
var_dump(isset ($clientes2));
var_dump(isset ($clientes3));

//permite revisar si unapropiedad de un arreglo asiciado existe
var_dump(isset ($clientes['nombre']));
var_dump(isset ($clientes['codigo']));


include 'includes/footer.php';