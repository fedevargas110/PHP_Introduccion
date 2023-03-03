<?php include 'includes/header.php';

//1er Estilo de crear array.
$carrito = ['Televisor', 'Tablet', 'Telefono'];

//Para mostrar con mejor formato el "pre".
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Acceder al i de un array
echo $carrito[1];

//Agregar productos al inicio del array
array_unshift($carrito, 'Computadora');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Agregar al final del arreglo
array_push($carrito, 'Auriculares');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//2do Estilo de craer array
$clientes = array('Fede', 'Vicki');

echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';