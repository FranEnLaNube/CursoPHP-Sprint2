<?php 
function calculateFee(int $call_duration) : float {
    $base_cost = 0.1;
    $cost_extra_minute = 0.05;
    $cost_call = $call_duration <= 3 ? $base_cost : $base_cost + (($call_duration-3)*$cost_extra_minute);
    return $cost_call;    
}
$call_duration = readline('¿Quant va durar la trucada? ');
echo "El preu de la trucada va sortir ".calculateFee($call_duration)." Euros.";
?>