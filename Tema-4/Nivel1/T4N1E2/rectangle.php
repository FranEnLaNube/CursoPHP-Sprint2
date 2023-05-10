<?php
require 'shape.php';
class Rectangle extends Shape
{
    function area()
    {
        return $this->height * $this->width;
    }
}
