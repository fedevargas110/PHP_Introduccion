<?php include 'includes/header.php';

//Objeto 
$cliente = [
    'nombre' => 'Fede',
    'saldo' => 250,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

//Para acceder a la info
echo $cliente['nombre'];

//Para acceder a informacion de segundo objeto
echo $cliente['informacion']['tipo'];

//Para agregar una propiedad mas
$cliente['apellido'] = 'Vargas';

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';