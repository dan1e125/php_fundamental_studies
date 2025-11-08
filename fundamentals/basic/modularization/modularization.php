<?php

/**
 * la modularizacion:
 * division del codigo en distintos archivos
 * existen tres funciones para modularizar el codigo
 */

/**
 * funcion include
 * esta funcion busca un archivo para importarlo 
 * sin embarjo sino lo encuentra muestra una alerta 
 * pero sigue funcionando el programa sin detenerse
*/ 

/** funcion include once
 * busca un arhivo de manera directa 
 * pero si por alguna razon 
 * se vuelve a importar el archivo la segunda vez lo ignora
 * a diferencia del include ya que el include produce un error
 */ 

/**
 * fuccion requiere:
 * importa un archivo pero si no lo encuentra 
 * da un error total, deteniendose el programa
 */ 

const nombre = "retaxito";
const edad = 14;
const profesion = "programador";

