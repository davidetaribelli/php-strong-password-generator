<?php
function generatePassword($length, $repetition, $upperChars, $lowerChars, $numbersChars, $symbolsChars)
{
    $upperCase = 'ABCDEFFGHIJKLMNOPQRSTUVWXYZ';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_=+';

    $chars = '';
    $password = '';
    
    if($upperChars){
        $chars .= $upperCase;
    }
    if($lowerChars){
        $chars .= $lowerCase;
    }
    if($numbersChars){
        $chars .= $numbers;
    }
    if($symbolsChars){
        $chars .= $symbols;
    }
    if($chars == ""){
        $chars = $upperCase . $lowerCase . $numbers . $symbols;
    }
    
    while ( strlen($password) < $length) {
        // Seleziono un carattere casuale dalla lista dei caratteri disponibili
        $randomChars = rand(0, strlen($chars));
        // Passo i caratteri selezionati ad una variabile
        $currentChars = $chars[$randomChars];
        // se non contiene un carattere già esistente allora lo aggiunge
        if( $repetition || !str_contains($password, $currentChars )){
            $password .= $currentChars;
        }
    }
    return $password;
}
?>