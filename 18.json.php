<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Auris',
        'precio' => 50,
        'disponibilidad' => true
    ],
    [
        'nombre' => 'Monitor 144HGZ 24"',
        'precio' => 250,
        'disponibilidad' => true
    ],
    [
        'nombre' => 'Teclado exprés',
        'precio' => 150,
        'disponibilidad' => false
    ]
];

echo '<pre>';
var_dump($productos);

//Para convertir a json
//Para resolver problemas de acentos y ñ
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

var_dump($json);

//Para devolverlo a array

$json_array = json_decode($json);

var_dump($json_array);


echo '<pre>';
include 'includes/footer.php';