<?php
/*
 * Escribe un programa que reciba un texto y transforme lenguaje natural a
 * "lenguaje hacker" (conocido realmente como "leet" o "1337"). Este lenguaje
 *  se caracteriza por sustituir caracteres alfanuméricos.
 * - Utiliza esta tabla (https://www.gamehouse.com/blog/leet-speak-cheat-sheet/) 
 *   con el alfabeto y los números en "leet".
 *   (Usa la primera opción de cada transformación. Por ejemplo "4" para la "a")
 */

define('LEET_DIC', [
  'a' => '4',
  'b' => 'I3',
  'c' => '[',
  'd' => ')',
  'e' => '3',
  'f' => '|=',
  'g' => '&',
  'h' => '#',
  'i' => '1',
  'j' => ',_|',
  'k' => '>|',
  'l' => '1',
  'm' => '/\\/\\',
  'n' => '^/',
  'o' => '0',
  'p' => '|*',
  'q' => '(_,)',
  'r' => 'I2',
  's' => '5',
  't' => '7',
  'u' => '(_)',
  'v' => '\\/',
  'w' => '\\/\\/',
  'x' => '><',
  'y' => 'j',
  'z' => '2',
]);

/**
 * Convert the text passed as leet lang
 * How it works?
 *  First, as the LEET_DIC constant is an associative array where the key 
 *  is the letter and the value es the equivalence, but the keys are in
 *  lowercase, and we need to duplicate the array but with the keys in
 *  upper case, using the array_keys with the array_map it apply the
 *  function strtoupper to each key, and with array_values, it returns
 *  just the values without its keys, with the function array_combine, it
 *  join the keys and de values, finally it use the function str_replace
 *  to replace each carater in the text passed as paramteter.
 *
 * @param string $text
 * @return string
 */
function translateToLeet(string $text): string {
  $leet_dic = array_combine(
    array_map('strtoupper', array_keys(LEET_DIC)),
    array_values(LEET_DIC)
  );
  $leet_dic += LEET_DIC;

  return str_replace(array_keys($leet_dic), array_values($leet_dic), $text);
}

echo translateToLeet('Hello World') . "\n";