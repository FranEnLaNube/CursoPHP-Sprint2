<?php 
require 'shape.php';
class Triangle extends Shape
{
    function area(){
        return ($this->height * $this->width)/2;
    } 
}
?>