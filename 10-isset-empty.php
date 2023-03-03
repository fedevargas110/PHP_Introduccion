<?php include 'includes/header.php';

$clientes = ['Pedro', 'Fede', 'Bruno'];
$carrito = array('Monitor', 'Auriculares', 'Teclado Mecanico');
$lista_super = [];


echo "<pre>";
var_dump($clientes);
echo "</pre>";

//Empty es para saber si un arreglo esta vacio

echo "<br>";
var_dump( empty($clientes)); //Con cosas
echo "<br>";
var_dump (empty($lista_super)); //Vacio

//Isset es para saber si un arreglo existe o una propiedad esta definida

echo "<br>";
var_dump( isset($carrito)); // Esta creado
echo "<br>";
var_dump( isset($perros)); //No esta creado ni definido

// Para ver si la propiedad esta definida
echo "<br>";
var_dump( isset($clientes[1])); //Esta propiedad existe

include 'includes/footer.php';