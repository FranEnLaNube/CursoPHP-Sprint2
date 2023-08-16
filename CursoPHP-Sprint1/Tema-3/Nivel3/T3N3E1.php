<?php
/* ### Exercici 1
    - Donat un array d’enters, fes un programa que:
    - Retorni cada valor de l’array elevat al cub fent servir la funció **array_map()**. 
*/
// Array for test
$int_array = range(1, 12);

// Logic
function cube($value){
    return ($value ** 3);
}

$new_int_array = array_map("cube", $int_array);
$combinedArray = array_combine($int_array, $new_int_array);
// Output
print_r($combinedArray);