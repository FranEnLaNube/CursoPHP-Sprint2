<?php 
require 'shape.php';
class Rectangle extends Shape
{
function area($height, $width){
    return $this->$height * $this->$width;
}
}
?>