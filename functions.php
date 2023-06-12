<?php
function generatePassword($length)
{
    $chars = 'ABCDEFFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()-_=+0123456789';
    // $upperCase = 'ABCDEFFGHIJKLMNOPQRSTUVWXYZ';
    // $smallCase = 'abcdefghijklmnopqrstuvwxyz';
    // $numbers = '0123456789';
    // $symbols = '!@#$%^&*()-_=+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        // Seleziono un carattere casuale dalla lista dei caratteri disponibili
        $randomChars = rand(0, strlen($chars - 1 ));
        // Passo i caratteri selezionati a password
        $password .= $chars[$randomChars];
    }
    return $password;
}
