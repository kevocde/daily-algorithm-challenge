<?php

/**
 * Check if a number ($limit) is on a fibonnaci sequence.
 * How it works?:
 *   if the actual number ($start) is greater than the number to find ($limit), the find number is not
 *   if not, check if the number ($start) is equal to the number to find ($limit), the find number is in
 *   else, call the function again with the $start parameter like the $end and the $end parameter the sum of $start and $end.
 *
 * @param integer $limit
 * @param integer $start
 * @param integer $end
 * @return boolean
 */
function checkFibo($limit, $start = 0, $end = 1): bool {
  if ($start > $limit) return false;
  elseif ($start == $limit) return true;
  else return checkFibo($limit, $end, ($start + $end));
}

/**
 * 1. The first line of the STDIN contains the number of lines to ckeck, so we read that line.
 * 2. Extrac the integer value of $lines (with the number of lines).
 * 3. Start a cycle while $lines is greater than zero.
 *   3.1 Read the new line and extrac the integer value.
 *   3.2 Call the checkFibo, if it return true, write the STOUT with "YES", if not write "NO".
 *   3.3 Substrac -1 to the value of $lines to avoid infinite loop.
 */
fscanf(STDIN, "%s", $lines);
$lines = intval($lines);
while ($lines > 0) {
  fscanf(STDIN, "%s", $input);
  $input = intval($input);
  if (checkFibo($input)) echo "YES\n";
  else echo "NO\n";
  $lines--;
}

/**
 * How test it?:
 *   With docker: docker run -it --rm -v "$PWD":/app -w /app php:8.2-cli /bin/bash -c "cat stdin | php fibocheck.php"
 */
