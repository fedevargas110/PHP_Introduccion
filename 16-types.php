<?php 
declare(strict_types=1);
include 'includes/header.php';


//Funcion normal
function usuarioAuth() {
    echo 'Usuario autenticado';
}

$cliente = usuarioAuth();

echo $cliente;

echo '<br>';

//Funcion con parametro y que imprime algo.

function usuarioAuth1(bool $autenticado) : void{
    if($autenticado){
        echo 'Usuario auth';
    }else{
        echo 'Usuario no auth';
    }
}

$cliente = usuarioAuth1(false);

echo $cliente;

echo '<br>';

//Funcion con parametro y que retorne algo en conjunto osea un string o un int.

function usuarioAuth2(bool $autenticado) : string | int{
    if($autenticado){
        return 'Usuario auth';
    }else{
        return 20;
    }
}

$cliente = usuarioAuth2(false);

echo $cliente;

echo '<br>';

//Funcion con parametro y que retorne algo en conjunto osea un string o un int.

function usuarioAuth3(bool $autenticado) : ?string{ //posiblemente me devuelva un string
    if($autenticado){
        return 'Usuario auth';
    }else{
        return null;
    }
}

$cliente = usuarioAuth3(true);

echo $cliente;

include 'includes/footer.php';