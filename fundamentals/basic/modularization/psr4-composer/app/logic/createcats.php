
<?php 
/**
 * phpfig =  comunidad que define reglas que definen como deberiamos de trabajar con php
 * 
 * psr4 como regla es psr4 que define la autocarga de archivos en realidad hace referencia 
 * a que todos los namespaces hacen referencia  a la ruta de la carpeta donde estan guardados
 * para poder hacer una autocarga de nuestros archviso
 * 
 * composer: usa la regla de psr4 para realizar la autocarga
 * debido a esto ya no utilizamos funciones como require, include, include_once etc
 * 
 * se inicia con composer init
 * !!!!!!!!!!!!!!!!!!!!!!!!!!
 * psr4 define que las clases se deben de llamar igual que el archivo
 * 
 * el namespace debe de ser igual a la carpeta como se llama
 * !!!!!!!!!!!!!!!!!!!!!!!!!
 */


use App\classes\ado;
use App\classes\ava;

function createCats(){
    $cat1= new ava("sol","amarillo",100);
    $cat1_adopted = new ado("sol", new DateTime("2022-04-16"), "daniel");
    echo $cat1->meow() . "me adopto {$cat1_adopted->GetAdoptedby()}";
}