<?php

function generatePassword($length)
{
    $pwChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,;:!?.$/*-+&@_+";
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, strlen($pwChar) - 1);
        $password .= substr($pwChar, $random, 1);
    }

    return $password;
}
