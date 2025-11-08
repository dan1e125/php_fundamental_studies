<?php

/*
function pokemon(){

    $numero = rand(1,5);

    switch ($numero){
        case 1:
            echo " tu pokemon es pikachu \n";
            break;
        case 2:
            echo "tu pokemon es charmander \n";
            break;
        case 3:
            echo "tu pokemon es bulbasour \n";
            break;
        default:
        echo " no hay pokemon para ti";
    }
}
echo "\n";


for ( $i=0; $i<20; $i++ ) {
    pokemon();
}

echo "\n";

// construccion de funciones con paramentros ; se pueden modularizar las funciones o modificar su comportamiento con funciones

$rank = (int)readline("por favor, ingresa tu puntaje:");

function estudiando($rank){
    if ($rank >= 20000) {
        echo "eres un gran estudiante\n";
    } else {
        echo "eres genial pero te falta para ser una leyenda\n";
    }
}

echo "\n"; 
estudiando($rank);

/*do {
    $rank = (int)readline("por favor, ingresa tu puntaje:");
    estudiando($rank);
} while(true);
 */

// profundizando en los parametros de las funciones
/*
function suma($a,$b){
    echo "la suma de $a + $b es:" . $a + $b . "\n";
}

suma(1,10);
echo "\n";

// si un usuario no pone nada en los parametros se tiene que poner valores por defecto es decir se asume un valor por defecto


function sumaConParametrosPre($a = 1, $b = 1){
    echo "la suma de $a + $b es:" . $a + $b . "\n";
}

sumaConParametrosPre();
echo "\n";

// operador de unpacking que se lleva  muy bien con los arreglos y puede profundizar los parametros
// ejemplo

$number0 = [1,2,3];
$number1 = [4,5,6];
$numbers = [...$number0, ...$number1];
var_dump($numbers);
echo "\n";

$number2 = [1,2];
function sumaespecial($a,$b){
    echo "suma de $a + $b es:" . $a + $b . "\n";
};

sumaespecial(...$number2);
echo "\n";

// como agregar parametros infinitos 

function sumainfinita(...$parametros){
    $calculo = 0;
    foreach ($parametros as $sumandos){
        $calculo += $sumandos;
    }
    echo "tu suma es: $sumandos \n" ;
}

sumainfinita(45,32);
echo "\n";



//uso de return en las funciones 

function frases(){

    $numero_aleatorio = rand(1,4);
    $resultado = "";

    switch($numero_aleatorio){
        case 1:
            $resultado = "aprende siempre \n";
            break;
        case 2:
            $resultado = "la tecnologia es el futuro \n";
            break;
        case 3:
            $resultado = "amor por php \n";
            break;
        case 4:
            $resultado = "viva la vida \n";
            break;
    }
    return $resultado;
}

echo frases();
echo "\n";

*/


