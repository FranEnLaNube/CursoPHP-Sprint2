<?php 
$X = array (10, 20, 30, 40, 50,60);
echo count($X);
unset($X[3]);
$newX = [];
foreach ($X as $key => $value) {
    $newX[] = $value;
}
?>