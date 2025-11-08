<?php

require __DIR__ . '/vendor/autoload.php';

echo text\format::upper('hola') . "\n"; //funcion desde el archivo format

echo up('idiota'); // funcion  sintetica desde el archivo help construido a partir del archivo format

echo "\n";

echo low('HOLA');

echo "\n";