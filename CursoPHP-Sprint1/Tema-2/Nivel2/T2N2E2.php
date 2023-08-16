<?php 
// Defining products prices
const CHOCOLATE_PRICE  = 1;
const GUM_PRICE  = 0.5;
const CANDY_PRICE  = 1.5;

// Functions for know subtotal price of each product
function add_chocolate(int $amount) : float {
    return CHOCOLATE_PRICE * $amount;
}
function add_gum(int $amount) : float {
    return GUM_PRICE * $amount;
}
function add_candy(int $amount) : float {
    return CANDY_PRICE * $amount;
}
/** Function to know the total price
 * @param int $choco_quantity ammount of chocolate in the buy
 * @param int $gum_quantity ammount of chewing gum in the buy
 * @param int $candy_quantity ammount of candy in the buy
 * @return $total_cost how much does the buy cost
 */ 
function price_calculator(int $choco_quantity, int $gum_quantity, int $candy_quantity) : float {
    $total_cost = add_chocolate($choco_quantity) + add_gum($gum_quantity) + add_candy($candy_quantity);
    return $total_cost;
}
// Interaction with user
$choco_quantity = readline("How much chocolate would you like to buy?");
$gum_quantity = readline("How much chewing gum would you like to buy?");
$candy_quantity = readline("How much candy would you like to buy?");

// final answer
$total_cost = price_calculator($choco_quantity, $gum_quantity, $candy_quantity);
echo "The total price of your buy is ".$total_cost. " Euros.";


?>