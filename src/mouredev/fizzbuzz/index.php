<?php
/**
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 *  - Múltiplos de 3 por la palabra "fizz".
 *  - Múltiplos de 5 por la palabra "buzz".
 *  - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */

/**
 * Print the sequence of number from 1 to 100 (include 1 and 100),
 * 
 * How it works?
 *  Iterate in I from 1 until 100,
 *  for each iteration check if the I number is multiple of 3 and and save the value
 *  in a variable, create a variable type string with the output value, and check if
 *  is multiple of each number, add the string to the output variable, finally check
 *  if the output variable is empty (the number is not multiple of any number),
 *  add the I value to the string and print the output variable.
 *
 * @return void
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