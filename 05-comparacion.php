<?php include 'includes/header.php';

$num_1 = 20;
$num_2 = 10;
$num_3 = 30;
$num_4 = "30";


var_dump($num_1 < $num_2);
echo "<br>";

var_dump($num_1 > $num_2);
echo "<br>";

var_dump($num_3 == $num_4);
echo "<br>";

var_dump($num_1 >= $num_3);
echo "<br>";

var_dump($num_1 <= $num_3);
echo "<br>";

var_dump($num_3 === $num_4);
echo "<br>";

var_dump($num_3 <=> $num_4); 
echo "<br>";

include 'includes/footer.php';