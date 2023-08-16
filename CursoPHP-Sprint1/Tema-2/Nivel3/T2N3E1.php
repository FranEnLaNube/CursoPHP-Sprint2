<?php
/**
 * Function who implements the Sieve of Eratóstenes 
 *
 * @param int $final_number The final number till where look for prime numbers
 * @return array Shows if each number is prime (true) or not (false)
 */
function prime_finder(int $final_number) : array
{
    // Filling an array from the first prime number till the given number
    $number = 2;
    $numbers = array_fill($number, $final_number - 1, TRUE);

    // Logic     
    do {
        if ($numbers[$number] == TRUE) {
            $i = $number;
            while ($i <= $final_number) {
                $i = $i + $number;
                if ($i <= $final_number) {
                    $numbers[$i] = FALSE;
                }
            }
        }
        $number++;
    } while ($number ** 2 <= $final_number);

    return $numbers;
}

// Output
$final_number = readline("What's the maximum number?");
$numbers = prime_finder($final_number);
var_dump($numbers);
