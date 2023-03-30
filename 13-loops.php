<?php include 'includes/header.php';
$i=0;//inicializador
while($i <10){
    echo$i . '<br>';

    $i++; //incemento

    $i=0;

}

do {
    echo $i . '<br>';
    $i++; //incemento

} while($i < 10);

/*
    3 imprimir Fizz
    5 imprimir buzz
    3y 5 imprimir fizz Buzz 

*/ 


for($i =0;$i<100;$i++) {
    if($i%15 === 0) {
        echo $i . '- FIZZ BUZZ <br>';
    }
    elseif($i%3=== 0){
        echo $i . '- FIZZ  <br>';
    }
    echo $i . '<br>';
}

include 'includes/footer.php';