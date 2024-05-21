<?php
/**
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 *  - Múltiplos de 3 por la palabra "fizz".
 *  - Múltiplos de 5 por la palabra "buzz".
 *  - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */

function fizzBuzz() {
  for ($i = 1; $i <= 100; $i++) {
    $output = "";
    $isMultiple3 = ($i % 3) === 0;
    $isMultiple5 = ($i % 5) === 0;

    if ($isMultiple3) $output .= "fizz";
    if ($isMultiple5) $output .= "buzz";

    if (empty($output)) $output = $i;
    
    echo $output . "\n";
  }
}

fizzBuzz();