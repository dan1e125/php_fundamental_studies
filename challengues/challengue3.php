<?php

function clear(){
    if (PHP_OS === "Linux"){
        system("clear");
    } else {
        system("cls");
    }
}

$possible_words = ["bebida","prisma","ala","dolor","felicidad","piloto","comida", "cena", "mujer", "hombre", "tristeza"];

define("MAX_ATTEMPS", 6);

echo "Welcome, to the game:\n\n";

// starting

$choosen_word = $possible_words[ rand(0, 9) ];
$choosen_word = strtolower($choosen_word);
$word_lenght = strlen($choosen_word);
$discover_letters = str_pad("", $word_lenght, "_");
$attemps = 0;

do {

echo "Palabra de $word_lenght letras \n\n";
echo $discover_letters . "\n\n";

// please write

$player_letter = readline("Escribe una letra: ");
$player_letter = strtolower($player_letter);

if ( str_contains($choosen_word, $player_letter) ){

    // how much and many times the word appears in _ to be replace
    $offset = 0;
    while ( 
        ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false 
    ) {
        $discover_letters[$letter_position] = $player_letter;
        $offset = $letter_position + 1;
    } 
    } else{

        clear();
        $attemps++;
        echo "letra incorrecta; te quedan:" . (MAX_ATTEMPS - $attemps) . "intentos";
        sleep(2);
}

clear();

} while ($attemps < MAX_ATTEMPS && $discover_letters != $choosen_word);

clear();

if($attemps < MAX_ATTEMPTS)
    echo "Congratulations\n\n";
else
    echo "try again\n\n";

echo "la palabra es: $choosen_word\n";
echo "Tu descubriste $discover_letters";


echo "\n";


