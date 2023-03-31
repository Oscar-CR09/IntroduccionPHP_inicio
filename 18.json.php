<?php include 'includes/header.php';


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
echo "<pre>";
var_dump ($producto);
echo "</pre>";
$json = json_encode($producto,json_unescape_unicode);
$json_array = json_encode($jason);

var_dump($json);
echo "</pre>";

include 'includes/footer.php';