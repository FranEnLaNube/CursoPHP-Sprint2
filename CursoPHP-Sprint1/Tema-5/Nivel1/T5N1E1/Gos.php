<?php 
//Class Gos who implements Animal to use makeSound in it.
class Gos implements Animal {
    //Own property
    public $name;
    public function makeSound(){
        return "bup, bup!";
    }
}
?>