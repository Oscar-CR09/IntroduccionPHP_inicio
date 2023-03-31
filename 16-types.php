<?php include 'includes/header.php';


function usuarioAutenticado(bool $autenticado): string | int {
    if($autenticado){
        return "el usuario est autenticado.";
    }else{
        return 20;
    }

}
$usuario= usuarioAutenticado(false);
echo $usuario;


include 'includes/footer.php';