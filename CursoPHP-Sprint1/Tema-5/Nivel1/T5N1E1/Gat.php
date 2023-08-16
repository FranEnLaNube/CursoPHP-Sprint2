<?php 
require_once 'Animal.php';
//Class gat similar to Gos, who implements Animal to use makeSound in it.
class Gat implements Animal {
    public $name;
    public function makeSound(){
        return "mèu";
    }
}
?>