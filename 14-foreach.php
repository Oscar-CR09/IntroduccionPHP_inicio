<?php include 'includes/header.php';

/*
    3 imprimir Fizz
    5 imprimir buzz
    3y 5 imprimir fizz Buzz 

*/ 

for($i = 1; $i<100 ; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . '- FIZZ BUZZ <br/>';
    }
    elseif($i % 3=== 0){
        echo $i . '- FIZZ  <br/>';
    }elseif($i % 5 === 0){
        echo $i . '- BUZZ <br/>';

    }

}
$cleinters = array('Pedro', 'Juan', 'karen');

foreach($cleinters as $cliente ){
    echo $cliente . '<br/>';

}

// echo count($cleinters);
echo sizeof($cleinters);

for($i = 0; $i < count($cleinters) ; $i++){
    echo $cleinters[$i] . '<br/>';

}

$cliente = [
    'nombre' => 'oscar',
    'saldo' => 200,
    'informacion' => [
        'tipo' =>'premium'
    ]
    ];

foreach ($cliente as $key => $valor) {
    echo $key . "-" .  $valor . '<br/>';

}


$productos = [
    [
        'nombre' => 'Tablet',
        'Precio' => 200,
        'disponible' => true
    ],

    [
        'nombre' => 'Televicion',
        'Precio' => 300,
        'disponible' => true
    ],

    [
        'nombre' => 'Monitor curvo',
        'Precio' => 400,
        'disponible' => false   

    ]
    ];


foreach ($productos as $producto){ ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$" . $producto['precio']; ?></p>
        <p> <?php echo($producto['disponible'])?'Disponible' : 'No disponible'; ?></p>

    </li>
    <?php
      
}

// foreach ($productos as $producto){
//     echo "<pre>";
//     var_dump ($producto);
//     echo "</pre>";

// }

// <?php
// if ($producto['disponible']) {
//     echo "<p>Disponible</p>";
// }else{
//     echo "<p>No Disponible</p>";
// }


/* ?>
//  echo "<pre>";
//  var_dump ($producto);
//  echo "</pre>";
*/

include 'includes/footer.php';