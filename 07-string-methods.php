<?php include 'includes/header.php';

$nombre = ' Federico ';

//Conociendo extencion de string
echo strlen($nombre);
echo "<br>";

//Eliminar espacion en blanco
echo strlen(trim($nombre));
echo "<br>";

//Convertirlo a mayusculas
echo strtoupper($nombre);
echo "<br>";

//Convertirlo a minusculas
echo strtolower($nombre);
echo "<br>";

//Remplazar una parte del string
echo str_replace('Federico', 'Fede', $nombre);
echo "<br>";

//Buscar si existe el string
echo strpos($nombre, 'co');
echo "<br>";

$tipo_cliente = 'Premium';
echo "<br>";
echo 'El cliente ' . $nombre . ' es ' . $tipo_cliente;
//Concatenar strings con un punto .


include 'includes/footer.php';