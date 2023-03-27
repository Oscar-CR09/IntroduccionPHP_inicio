<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 12354984;

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';