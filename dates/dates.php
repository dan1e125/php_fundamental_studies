<?php

/**
 * agregar tiempo a un tiempo determinado
 * metodo 1: a partir the built-in functions
 * metodo 2: a partir de programacion orientada a objetos
 * */ 
/*
// metodo 1 trabajar a punta de funciones

$interval = date_interval_create_from_date_string("3 months");
$date = date_create();
date_add($date,$interval);
echo date_format($date,"Y-m-d") . "\n";

// metodo 2 programacion orientada a objetos
$interval1 = DateInterval::createFromDateString("2 years");
$date1 = new DateTime();
$date->add($interval);
echo $date->format("Y-m-d") . "\n";


//date times y zonas horarias specific functions

date_default_timezone_set("America/Mexico_City");
date_default_timezone_get();

$now = date("Y-m-d H:i:s");
echo $now;

$now_create = date_create(); //devuelve un objeto date pero no la fecha
echo $now_create; //resultaria en error

echo strtotime($now); //string to time in unix format


echo strtotime("17 april 2029") . "\n";
echo strtotime("+1 week") . "\n";
echo strtotime("next Year") . "\n";
echo strtotime("last Year") . "\n";

$last_year = strtotime("last Year") . "\n";

echo date("Y-m-d H:i:s",$last_year) . "\n";

*/ // calculo de diferencia de tiempo 

$today = new DateTime();
$birth = new DateTime("1990-04-04");
$interval = $birth->diff($today);
echo $interval->format("%y-%d-%") . "\n";

$date = DateTime::createFromFormat("l j F Y","Sunday 17 april 2022" );
echo $date->format("Y-m-d H:i:s") . "\n";

//modificar una fecha 

$date_mod = new DateTime();
$date_mod->modify("+1 day +2 months");
echo $date_mod->format("Y-m-d");