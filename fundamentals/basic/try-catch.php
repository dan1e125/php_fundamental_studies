<?php

/**
 * errores en tiempo de ejecucion:
 * 
 * algunos ejemplos son una division entre 0, 
 * llamar un array vacio
 * consultar una url incorrecta
 * 
 * cuando existen errores en tiempo de ejecucion:
 * 
 * php lanza una excepcion cuando identifica un error
 * emititindo una notificacion para que el programador 
 * lo corrija.
 * 
 * el programador no debe permitir que el usuario vea el error
 * el programador debe de tener control sobre el error, es decir,
 * debe de manejar el error. 
 * 
 * php tiene varias herramientas que permiten el manejo del error
 * asi el usuario no reconoce ni identifica el error
 * 
 * para ello existe el try/catch en el 
 * 
 * el try permite ejecutar cierto codigo que es probable que tenga un error
 * el catch sirve para que en caso de que exista un error el catch lo atrape 
 * y pueda el programador tomar controlar sobre este y hacer algo al respecto.
 * 
 * la sintaxis del try catch es la siguiente 
 * 
 * try 
 * {
 * # codigo posible de error
 * }
 * 
 * catch ()
 * {
 * # se atrapa el error
 * }
 * 
 * el programador puede lanzar errores de manera voluntaria con la palabra
 */
/*
//bypass: ignorar el error y seguir adelante para esto se deja en blanco el espacio de codigo de catch
echo "<pre>";
try {
$resultado = 20/0;
echo $resultado;
} catch(Throwable $e){
}

echo "\n";
echo "</pre>";
echo "<pre>";
// personalizando la devolucion del error
try {
$resultado = 20/0;
echo $resultado;
} catch(Throwable $e){
    echo "Algo salio mal";
}
echo "\n";
echo "</pre>";
echo "<pre>";
// utilizando una funcion de la lase throwable
try {
$resultado = 20/0;
echo $resultado;
} catch(Throwable $e){
    $e->getMessage();
}

echo "\n";
echo "</pre>";
echo "<pre>";
try{
    $pet = readline("que quieres adoptar: ");

    if ($pet != "cat" && $pet != "rabbit")
        throw new Exception("We apologize, we do not have $pet");
    echo "Congratulations for your new $pet";
} catch(Throwable $th){
   echo $th->getMessage();
}

echo "\n";
echo "</pre>";

//methods for exceptions that contains the Throwable interface
echo "<pre>";
try {

    $resultado = 20/0;
echo $resultado;
} catch(\Throwable $th){

echo $th->getMessage();
}

echo "\n";
echo "<pre>";
echo "<pre>";
try {

    $resultado = 20/0;
echo $resultado;
} catch(\Throwable $th){

echo $th->getCode();
}

echo "\n";

echo "</pre>";
echo "<pre>";
try {

    $resultado = 20/0;
echo $resultado;
} catch(\Throwable $th){

echo $th->getFile();
}

echo "\n";

echo "</pre>";
echo "<pre>";
try {

    $resultado = 20/0;
echo $resultado;
} catch(\Throwable $th){

echo $th->getLine();
}

echo "\n";
echo "</pre>";

echo "<pre>";
function div(){
    return 20/0;
}
echo "</pre>";

echo "<pre>";
function division(){
    return div();
}

echo "</pre>";

echo "<pre>";
try {

    $resultado = division();
echo $resultado;
} catch(\Throwable $th)
{

echo var_dump($th->getTrace());

};

echo "\n";

echo "</pre>";

*/
//custom exceptions and heredability classes with extends 

class CatException extends Exception {
    public function getMeow(){
        return "meowww...wwwww..www";
    }
}

class rabbitException extends Exception{
    public function getRabbit(){
        return "glimp...glimp..glimp";
    }
}

try{
    $exception = readline("Exception to launch: ");
    if($exception == "cat")
        throw new CatException("bad cat");
    else
        throw new rabbitException("bad rabbit");

} catch (CatException $cat){
    echo $cat->getMessage() . "\n";
    echo $cat->getMeow() . "\n";
}
catch (rabbitException $cat){
    echo $cat->getMessage() . "\n";
    echo $cat->getRabbit() . "\n";
} finally{
    // se ejecuta siempre haya o no error

    echo "it is fine: \n";
}