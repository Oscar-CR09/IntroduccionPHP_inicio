<?php include 'includes/header.php';

$carrito = ['tablet', 'mobile', 'Televicion'];
var_dump(in_array('table',$carrito));
var_dump(in_array('tablet',$carrito));

$numero =array(1,3,5,4,2);
sort($numero); // de mayor a menor
rsort($numero);



echo "<pre>";
var_dump($numero); //
echo "</pre>";

$cliente = array(
    'saldo'=> 200,
    'tipo'=> 'premium',
    'nombre'=> 'Juan'
);

asort($cliente);//ordena por valores
// ksort($cliente);//ordena por llaves 
arsort($cliente);//ordena por (z primero)



echo "<pre>";
var_dump($cliente); //
echo "</pre>";



include 'includes/footer.php';