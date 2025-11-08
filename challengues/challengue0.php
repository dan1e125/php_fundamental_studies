<?php

// conversion de segundos a horas, minutos y segundos

$segundos = readline("Ingresa el tiempo en segundos: ");

// echo $segundos;
$horas = (int) ($segundos / 3600); // una hora dura 3600 segundos
$segundos = (int) ($segundos % 3600);
// echo $horas . " " . $segundos; 
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "son $horas horas, $minutos minutos y $segundos segundos.";
echo "\n";