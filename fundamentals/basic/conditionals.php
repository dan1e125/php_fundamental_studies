
<?php

/**
 * sintaxis:
 * if (condition)
 * {code}
 * else{code}
 */

$asientos_disponibles = 1;
$hijo_del_director = false;

if ($asientos_disponibles > 0) 
    echo "Puede ver la pelicula de hulk";
else if ($hijo_del_director == true)
    echo "Puedes pasar a ver la pelicula ya que eres el hijo del director";
else
    echo "lo sentimos no puedes ver la pelicula de hulk";

echo "\n"; 

// switch conditionals 

/**
 * case(variable){
 * case 'value':
 * # code
 * case 'value';
 * # code
 * default:
 * #code
 * }
 */


//michi 1: 9
//michi 2: 4
//michi 3: 3
//michi 4: 9

$michi = 2;

switch($michi)
{
    case 1:
        echo "su numero favorito es el 9";
        break;
    case 2:
        echo "su numero favorito es el 4";
        break;
    case 3:
        echo "su numero favorito es el 3";
        break;
    default:
        echo " el michi no existe";
}

echo "\n";

$streamer = readline("ingresa la cantidad de dinero que tienes en twitch:"  );

switch($streamer){
    case $streamer <= 100:
        echo "no puedes retirar tu dinero";
        break;
    case $streamer >= 100:
        echo "puedes retirar tu dinero";
        break;
    default:
        echo "no ingresaste un valor a evaluar";
}
echo "\n";
