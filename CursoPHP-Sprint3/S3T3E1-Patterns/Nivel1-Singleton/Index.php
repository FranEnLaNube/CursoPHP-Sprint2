<?php 
include "Tigger.php";

$tigger = Tigger::getInstance();
$tigger1 = Tigger::getInstance();


$roarsDesired = 8;

for ($i=0; $i < $roarsDesired; $i++) { 
    echo $tigger->roar()."<br>";
}
for ($i=0; $i < $roarsDesired; $i++) { 
    echo $tigger1->roar()."<br>";    
}

// If Singleton is working well the counter should accumulate the total printings from both objects 

echo "Tigger has roared ". $tigger1->getCounter(). " times.";
