<?php

/*
// ayudan a comparar dos o mas elementos 

// == igual e === identicos
 $a = 5;
 $b = 5;
 $b2 = "5";
 $c = 9;
 $d = 2;

 // finalmente su resultado son valores booleanos 

var_dump($a == $b);
var_dump($a == $b2);
var_dump($a === $b2);

// != Diferente o no es igual a 

var_dump($a != $b);
var_dump($a != $b2);
var_dump($a !== $b2);

// < menor que 

var_dump($a < $b);
var_dump($c < $b);
var_dump($d < $b);

// > mayor que 
var_dump($a > $b);
var_dump($c > $b);
var_dump($d > $b);

// >= 
var_dump($a >=  $b);
var_dump($c >= $b);
var_dump($d >= $b);

// <= 

var_dump($a <= $b);
var_dump($c <= $b);
var_dump($d <= $b);

// operador especial nave espacial <=>

echo 2 <=> 1; // si el numero de la izquierda es mayor que el de la de derecha el resultado es 1
echo "\n";
echo 1 <=> 1; // si ambos numeros son iguales el resultado es cero
echo "\n";
echo 1 <=> 2; 
echo "\n";

// ?? fusion de null ; define la variable de entrada como en bash

$edad = 25;
echo $edades ?? $edad; // si la edad de edades no esta definida entonces usa la variable edad
echo "\n";

// special operators

// operador de asignacion 
 
$edad_de_jaimito = ($edad_de_pepito = 18 ) + 5;
echo "la edad de pepito es $edad_de_pepito \n";
echo "la edad de jaimito es $edad_de_jaimito"; 
echo "\n"; 

// operadores de incremento 

$contador = 1; 
$contador = $contador + 1; 
echo $contador; 
echo "\n";
$contador += 1; 
echo $contador;
echo "\n"; 
$contador++;
echo $contador; 
echo "\n" ;

// operador de concatenacion 
$nombre = "Carlos"; 
$nombre = $nombre . " " . "Santana";
echo $nombre; 
echo "\n";

$nombre = "Carlos"; 
$nombre .= " " . "Santana";
echo $nombre; 
echo "\n";

$contador = 1;
$contador++; 
echo $contador;
echo "\n";
*/
//operador de nave espacial la cual compara dos elementos 

//el operador especial se puede activar para modelar arreglos; ejemplo:

$precios_de_cafe = [12,15,86,21,45,12];

usort($precios_de_cafe, function($a, $b){
    return $a <=> $b;
});

var_dump($precios_de_cafe);

//logical operators

// si afirmacion/condicion 1 Y afirmacion/condicion 2 es Verdad entonces es Verdad
// si afirmacion/condicion 1 o afirmacion/condicion 2 es Verdad entonces es Verdad
// invierte la afirmacion 
/*
$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programadores = false;

var_dump($michis_felinos && $michis_4_patas);
var_dump($michis_4_patas || $michis_vuelan);
var_dump(!$michis_vuelan && !$michis_programadores);

$resultado = $michis_4_patas and $michis_programadores;
var_dump($resultado);

echo "\n";

// arithmetic operators
/* 
** = potencia, -$a = numero negativo, +$a = convertir string a int de manera eficiente, +, -, /, % */
/*
echo 5 + 5;
echo "\n";
$resultado = 5 - 3;
echo $resultado;
echo "\n";
echo 5 ** 3;
echo "\n";
echo (5*6) . " " . (80/4); 
echo "\n";
echo 5 % 2 . "\n";

$horas = 7524;
echo "7200 segundos convertidos a horas son " . $horas / 3600 . "\n";
echo "sobran" . " " . ($horas % 3600) . " ". "segundos";  
echo "\n";
*/
