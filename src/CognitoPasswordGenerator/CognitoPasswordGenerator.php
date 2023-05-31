<?php

namespace yasirpervez07\CognitoPasswordGenerator;


class CognitoPasswordGenerator
{
    /**
     * @throws \Exception
     */
    public static function generate($length = 12)
    {
        $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $specialCharacters = '!@#$%^&*()_+-={}[]|:;<>,.?/~';

        $password = '';
        $password .= $uppercaseLetters[random_int(0, strlen($uppercaseLetters) - 1)];
        $password .= $lowercaseLetters[random_int(0, strlen($lowercaseLetters) - 1)];
        $password .= $numbers[random_int(0, strlen($numbers) - 1)];
        $password .= $specialCharacters[random_int(0, strlen($specialCharacters) - 1)];

        $remainingLength = $length - 4;

        $allCharacters = $uppercaseLetters . $lowercaseLetters . $numbers . $specialCharacters;
        for ($i = 0; $i < $remainingLength; $i++) {
            $password .= $allCharacters[random_int(0, strlen($allCharacters) - 1)];
        }

        $password = str_shuffle($password);

        return $password;
    }
}
