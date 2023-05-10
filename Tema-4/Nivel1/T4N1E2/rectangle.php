<?php
//add require_once to avoid conflicts calling it in main.php
require_once 'shape.php';
class Rectangle extends Shape
{
    function area()
    {
        return $this->height * $this->width;
    }
}
