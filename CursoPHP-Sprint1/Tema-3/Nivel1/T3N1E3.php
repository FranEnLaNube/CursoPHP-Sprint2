<?php
//Function to check if a letter if present in an array of words

function checker($words, $char): bool
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

// User interaction
function getWords(): array
{
    echo "Please insert your words. Insert 'q' to accept\n";
    do {
        $word = readline("Your word: ");
        if (empty($word) || is_numeric($word)) {
            echo "Please fill the words correctly.\n";
            $word = readline("Your word: ");
        }
        if ($word != 'q' && !empty($word) && !is_numeric($word)) {
            $words[] = $word;
        }
    } while ($word != 'q');
    return $words;
}
function getLetter(): string
{
    echo "Please insert the letter to find.\n";
    $letter = readline("Your letter:\n");
    if (empty($letter) || is_numeric($letter) || strlen($letter) != 1) {
        echo "Please give a correct letter.\n";
        getLetter(); // Ask letter again 
    }
    return $letter;
}
//Solution
$words = getWords();
$letter = getLetter();

var_dump($result = checker($words, $letter));
