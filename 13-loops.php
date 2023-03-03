<?php include 'includes/header.php';

$i = 0; //Iniciamos en 0

while($i<=10){
    echo $i . '<br>';

    $i++;
}
    $i = 0;
do{
    
    
    $i++;
    echo $i;
    
}while($i<10);

for($i=0;$i<=10;$i++){
    echo $i . '<br>';
}

for($i=1;$i<=25;$i++){
    if($i % 3===0 && $i % 5===0){
        echo $i . 'Multiplo de 3 y de 5 <br>';
    }else if($i % 3===0){
        echo $i . 'Multiplo de 3 <br>';
    }else if($i % 5===0){
        echo $i . 'Multiplo de 5 <br>';
    }else {
        echo $i . '<br>';
    }
}

$clientes  = array('Fede', 'Manu', 'Chuba');

foreach($clientes as $cliente){
    echo $cliente . '<br>';
}

//Iterar arreglos asociativos

$perfumes = [
    'nombre' => 'Armani',
    'nombre1' => 'Code',
    'nombre2' => 'Cucci'
];


foreach($perfumes as $key => $perfume){
    echo $key . ' - - ' . $perfume . '<br>';
}

include 'includes/footer.php';
