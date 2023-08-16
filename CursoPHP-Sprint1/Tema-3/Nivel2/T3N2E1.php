<?php
/* ### Exercici 1

Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

- La intersecció dels dos arrays (nombres en comú)
- La mescla dels dos arrays. */

// Create both arrays
$int_array = range(0, 12);
$float_array = range(0, 10, 0.5);

//Functions to find the intesections

// "Own" function using for each
function find_equal_numbers(array $int_array, array $float_array): array
{
    foreach ($int_array as $int_number) {
        foreach ($float_array as $float_number) {
            if ($int_number == $float_number) {
                $equal_numbers[] = $float_number;
            }
        }
    }
    return $equal_numbers;
}
// Using php function array_intersect()
function find_intersections(array $int_array, array $float_array): array
{
    $mixed_array = array_intersect($int_array, $float_array);
    return $mixed_array;
}

// Function to create an array with the numbers no repeated in both arrays

function array_joiner(array $int_array, array $float_array) : array {
    foreach ($int_array as $int_number) {
        if (!in_array($int_number, $float_array)) {
            $float_array [] = $int_number;
        }
    }
    sort($float_array);
    return $float_array;
}
echo "Finding intesections using foreach{}";
$equal_numbers = find_equal_numbers($int_array, $float_array);
var_dump($equal_numbers);

echo "With php array_intersect()";
$intersections = find_intersections($int_array, $float_array);
var_dump($intersections);

echo "Creating a new array with the numbers no repeated";
$mixed_array = array_joiner($int_array, $float_array);
var_dump($mixed_array);