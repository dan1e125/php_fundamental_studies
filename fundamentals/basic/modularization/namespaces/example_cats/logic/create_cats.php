<?php
require("/home/frankenstein/Documents/programming/php/fundamentals/basic/modularization/namespaces/example_cats/classes/cats_available/classes.php");
require("/home/frankenstein/Documents/programming/php/fundamentals/basic/modularization/namespaces/example_cats/classes/cats_adopted/classes.php");

use cats_available\cat; #abreviar uso de namespaces para no dar el fully qualified domain
use adopted_michis\cat as adopted; // se alias la importacion 


$cat1 = new cat("ceres", "blanquita",16);
$cat2 = new cat("van gogh", "negrito", 18);
$cat3 = new cat("apolo", "negrito", 4);

$cat1_adopted = new adopted("ceres", new DateTime("2014-01-01"),"daniel");
$cat2_adopted = new adopted("van gogh",new DateTime("2012-01-01"), "daniel");
$cat3_adopted = new adopted("apolo", new DateTime("2021-01-01"), "claudia");



# usado todo con el fully qualified domain
/*
$cat1 = new cats_available\cat("ceres", "blanquita",16);
$cat2 = new cats_available\cat("van gogh", "negrito", 18);
$cat3 = new cats_available\cat("apolo", "negrito", 4);

*/