<?php include 'includes/header.php';

//Funcion sin parametros ni argumentos

function sumar(){
    echo 2 + 2;
}

sumar();

echo '<br>';
//Funciion con parametros y argumentos

function sumar1($numero1, $numero2){//<------ aca pasamos parametros a funcion
    echo $numero1 + $numero2;
}

sumar1(10, 20);//<------- aca pasamos los argumentos que despues la funcion los toma como parametros


echo '<br>';

//Funcion con parametros nullos
function sumar3($num1 = 0, $num2 = 0){ // Definimos los parametros en 0, para que el q tenga lo tome y el que no lo defina en 0
    echo $num1 + $num2;
}

sumar3(10); //<----- como pasamos un solo argumento.

//declare(strict_types=1)

echo '<br>';

//Argumentos nombrados
function sumar4($num1, $num2){ // al pasar argumentos nombrados los toma en como nosotros lo definimos
    echo $num1 . '     ';

    echo $num1 + $num2;
}

sumar4(num2: 10 , num1: 30); //<----- nombremaos los argumentos y lo pasamos en diferente orden.

include 'includes/footer.php';