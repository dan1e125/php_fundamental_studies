<?php

/**
 * while (condition){# code}
 */

$contador = 0;

// ciclo while .. do
while ($contador < 10){
    echo "este curso esta increible";
    $contador++;
    echo "\n";
}

echo "\n";

$usernames = ["man","men", "min"];

// ciclo do .. while

/**
 * do {#code} while (condition)
 */

do{
    $username = readline("ingresa tu nombre");
} while (in_array($username, $usernames));

echo "\n";

do{
    echo "esto se ejecuta por lo menos una vez";
} while(false);

echo "\n";


// ciclo for
/**
 * for (variable;condition;operation){# code}
 */

for ($i=0; $i<10; $i++) {
    echo $contador . "\n";
}
echo "\n";

for ($i=0, $a = 0; $i<10; $i++, $a +=2) {
    echo "i = $i a = $a" . "\n";
}
echo "\n";

//ciclo foreach itera sobre los elementos sin necesidad de especificar condiciones

/**
 * sintaxis
 * foreach ($variable as $key => $value){code #}
 * foreach($variable as $variable){# code}

 */

$cafes = [
    "americano" => 20,
    "latte" => 25,
    "capuccino" => 27,
    "mocca" => 24,
];

foreach ($cafes as $tipo => $prices) {
    echo "actualmente encontre el cafe $tipo \n";
    if($tipo == "latte"){
        echo "ese es el que quiero";
        break;
    }
}
echo "\n";

foreach ($cafes as $tipo => $prices) {
    echo "el cafe $tipo cuesta $$prices mil pesos \n"; 
}
echo "\n";

$tags = [
    "html",
    "laravel",
    "javascript",
    "php",
];
foreach ($tags as $i) {
    echo "$i \n";
};
foreach ($tags as $e){
    echo "$e \n";
};