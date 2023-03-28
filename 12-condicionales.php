<?php include 'includes/header.php';

$autentificado = true;
$admin = false;

if ($autentificado && $admin){
    echo "usuario autentificado";
} else{
    echo "usuario no autentificado inicia secion";
}

//if anidado
$cliente = [
    'nombre' => 'oscar',
    'saldo' => 200,
    'informacion' => [
        'tipo' =>'premium'
    ]
    ];

    echo '<br />';
if (!empty($cliente)){
    echo "El arreglo de cliente no esta vacio ";

    if($cliente['saldo']>0){
        echo "El cliente tiene saldo disponible";
    }
} else {
    echo "No hay saldo ";
}

echo '<br />';
if($cliente['saldo']>0){    
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo']==='Premium') {
    echo "El cliente es Premium";
} else{
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

echo "<br/>";
//switch 
$tecnologia='PHP';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje";
        break;
    case 'Javascript':
        echo "Genial el leguaje de la web";
        break;
    case 'html':
        case 'emmm...';
        break;
    default:
        echo "Algun lenguaje que no se cual es";
        break;
    }

include 'includes/footer.php';