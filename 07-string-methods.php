<?php include 'includes/header.php';

$nombreCliente = "juan pablo";
//conocer extencion de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//eliminar esapcios en blanco 

$texto = trim($nombreCliente);
echo strlen($texto);

//converti a maysuculas
echo strtoupper($nombreCliente);

//convertir a minusculas

echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));


echo str_replace('juan', 'J',$nombreCliente);

//revisar si un string existe

echo strpos($nombreCliente, 'Juan');

$tipoCliente = "premium";

echo "el cliente ". $nombreCliente. " es ". $tipoCliente;


echo " El cliente {$nombreCliente} es ${tipoCliente}";


include 'includes/footer.php';