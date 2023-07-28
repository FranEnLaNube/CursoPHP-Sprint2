<?php
//Function to check if a letter if present in an array of words

function checker($words, $char)
{
    foreach ($words as $word) {
        // stripos() returns an int or null, so with is_int() get a bool
        $isPresent = is_int(stripos($word, $char));
        if (!$isPresent) {
            return $isPresent;
        }
    }
    return $isPresent;
}
// Solution
$words = ['Pedro', 'Roberto', 'Martin', 'Mariano'];
$char = 'R';
$result = checker($words, $char);
var_dump($result);
