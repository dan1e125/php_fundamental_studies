<?php

$edades = [
    20,
    18,
    40,
];

echo "una de las edades es" . " " . $edades[0]; 
echo "\n";

$edades_array = array(20,18,40);

echo "una de las edades es" . " " . $edades_array[0];
echo "\n";

// associative arrays 

$edades = [

    "carlos" => 18,
    "apolo" => 12,
    "amanda" => 40,
];

echo "la edad de carlos es" . " " . $edades["carlos"];

echo "\n";

$cafes = array(
    "capuccino" => 50,
    "latte" => 49,
    "americano" => 80,
);

echo "el precio del cafe americano es {$cafes['americano']}";
echo "\n";

$personas = [
    "amanda" => array(
        "edad" => 20,
        "apellido" => "zapata",
    ),
];

echo "la informacion de amanda es:" . " " . $personas["amanda"]["edad"];
echo "\n"; 

//manipulacion de arreglos

$edades_manipulation = [
    18,
    22,
    40,
    34,
];

// count function 

echo count($edades_manipulation);
echo "\n";

// array_push function
array_push($edades_manipulation, 13);
var_dump($edades_manipulation);

$not_array = "";
var_dump(is_array($not_array));
var_dump(is_array($edades_manipulation));

// explode function 
$frutas = "fresa,cereza,manzana"; 
$frutas_lista = explode(",", $frutas);
var_dump($frutas);
var_dump($frutas_lista);

//implode 

$frutas_alt = ["manzana", "fresa", "cereza"];
$frutas_implode = implode(",", $frutas_alt);
var_dump($frutas_implode); 

$felinos = [
    array(
        "ocupacion" => "futbolista",
        "color" => "rojo",
        "comida_favorita" => "pizza",
        "nombre" => "apolo",

    ),

    array(
        "ocupacion" => "reina",
        "color" => "rosa",
        "comida_favorita" => "caviar",
        "nombre" => "ceres"
    ),

    array(
        "ocupacion" => "artista",
        "color" => "blanco",
        "comida_favorita" => "salmon",
        "nombre" => "vangogh"
    ),
];

echo "vangogh es un felino hermoso que tiene como ocupacion ser " . " " .  $felinos[2]["ocupacion"];
echo "\n";

// html + arrays 


$course = "curso profesional de php y laravel";

$tags = [
    "html",
    "laravel",
    "javascript",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
    <p><?= $tags[0] ?></p>
    </body>
</html>
