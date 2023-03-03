<?php include 'includes/header.php';

$array = ['Fede', 'Vicki', 20];

//Buscar elementos existentes en array
var_dump(in_array('Fede', $array));
var_dump(in_array('Pepe', $array));

echo '<br>';

//ordenar elementos de un array
$numeros = [2,9,5,7,1,6];
var_dump($numeros);

//Menor a mayor
echo '<br>';
sort($numeros);
var_dump($numeros);


//Mayor a menor
echo '<br>';
rsort($numeros);
var_dump($numeros);

//Ordenar por valor primero numeros despues alfabeticamente
echo '<br>';
asort($array);
var_dump($array);

//Ordenar por valor primero numeros despues alfabeticamente al reves
echo '<br>';
arsort($array);
var_dump($array);

//Ordenar llaves en orden alfabetica
echo '<br>';
ksort($array);
var_dump($array);

//Ordenar llaves en orden al reves alfabeticamente
echo '<br>';
krsort($array);
var_dump($array);

include 'includes/footer.php';