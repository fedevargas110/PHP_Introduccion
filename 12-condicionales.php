<?php include 'includes/header.php';

$array = [
    'nombre' => 'Roberto',
    'edad' => '22',
    'informacion' => [
        'domicilio' => 'Ricardo rojas 7770'
    ]
];

if ($array['nombre']=['Fede']){
    echo 'El nombre del cliente es Fede';
}

echo '<br>';

//If anidados...

if ($array['nombre']!=['Fede']){
    echo 'El nombre del cliente es Fede';
    echo '<br>';
    if($array['informacion']['domicilio']!=['Ricardo rojas 7770']){
        echo 'Usted cambio el domicilio';
    }else{
        echo 'El domicilio es Ricardo rojas 7770';
    }
}

//Else IF

if ($array['nombre']!=['Fede']){
    echo 'El nombre del cliente es Fede';
    echo '<br>';
}else if($array['edad']= 22){
    echo 'Fede tien 22 anos';
}else{
    echo 'nada';
}


$tecnologia = 'pepe';

switch ($tecnologia){
    case 'PHP':
        echo 'La mejor Tecnologia';
        break;
    case 'JavaS':
        echo 'La mejor tec para web';
        break;
    default:
        echo 'define una tecnologia';
        break;
}



include 'includes/footer.php';