<?php 
$X = array (10, 20, 30, 40, 50,60);
//getting the $x size
echo count($X);
//deleting 4th value of $X
unset($X[3]);
//Creating a new Aray to sort get the index in order
$newX = [];
//Filling $newX with $X values
foreach ($X as $key => $value) {
    $newX[] = $value;
}
// Podría haber usado la función $X = array_values($X);
//Printing $newX size
echo '<br>';
echo count($newX);
?>