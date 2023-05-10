<?php
//add require_once to avoid conflicts calling it in main.php
require_once 'shape.php';
//Class Rectangle inherits properties from Shape
class Rectangle extends Shape
{
    //Rectangle's own function
    function area()
    {
        return $this->height * $this->width;
    }
}
