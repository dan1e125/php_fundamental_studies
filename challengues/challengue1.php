<?php

/* 
Cuantas posibilidades existen para resolver o abordar un problema o situacion.


$pregunta = (int)readline("Ingresa la tienda a la cual deseas evaluar los caminos por llegar: ");
echo "\n";

if ($pregunta == $tienda2) {
    echo "Has seleccionado la tienda: $tienda2\n";
} elseif ($pregunta == $tienda3) {
    echo "Has seleccionado la tienda: $tienda3\n";
} elseif ($pregunta == $tienda4) {
    echo "Has seleccionado la tienda: $tienda4\n";
} else {
    echo "Tienda no válida, seleccionando la tienda por defecto: $tienda5\n";
}


$tiendas = [
    2 => "un camino por llegar",
    3 => "dos caminos por llegar",
    4 => "tres caminos por llegar",
    5 => "cinco caminos por llegar"
];

$pregunta = (int)readline("Ingresa la tienda a la cual deseas evaluar los caminos por llegar: ");
echo "\n";

if ( $pregunta == $tiendas[2] ){
    echo "$tiendas[2]\n";
} elseif  ($pregunta == $tiendas[3]) {
    echo "$tiendas[3]\n";
}elseif($pregunta == $tiendas[4]){
    echo "$tiendas[4]\n";
}elseif ($pregunta == $tiendas[2]){
    echo "$tiendas[5]\n";
} else{
    echo "tienda no valida";
}

*/

$tiendas = [
    2 => "un camino por llegar",
    3 => "dos caminos por llegar",
    4 => "tres caminos por llegar",
    5 => "cinco caminos por llegar"
];

$pregunta = (int)readline("Ingresa la tienda a la cual deseas evaluar los caminos por llegar: ");
echo "\n";

if (array_key_exists($pregunta, $tiendas)) {
    echo $tiendas[$pregunta] . "\n";
} else {
    echo "Tienda no válida\n";
}

