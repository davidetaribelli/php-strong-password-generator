<?php
function generatePassword($length)
{
    $chars = 'ABCDEFFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()-_=+0123456789';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        // Seleziono un carattere casuale dalla lista dei caratteri disponibili
        $randomChars = rand(0, strlen($chars));
        // Passo i caratteri selezionati a password
        $password .= $chars[$randomChars];
    }
    return $password;
}
