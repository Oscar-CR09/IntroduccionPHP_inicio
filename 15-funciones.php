<?php 
declare(strict_types=1);
include 'includes/header.php';

// declare(strict_types=1);

function sumar(int $n1=0,int $n2=0) {
    echo $n1+$n2;
}

sumar(10,20);
echo '<br>';
sumar(10,2);
echo '<br>';
sumar(10,5);
echo '<br>';
sumar(10,3);




include 'includes/footer.php';