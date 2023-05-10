<?php 
//add require_once to avoid conflicts calling it in main.php
require_once 'shape.php';
//Class Triangle inherits properties from Shape
class Triangle extends Shape
{
    //Triangle's own function
    function area(){
        return ($this->height * $this->width)/2;
    } 
}
?>