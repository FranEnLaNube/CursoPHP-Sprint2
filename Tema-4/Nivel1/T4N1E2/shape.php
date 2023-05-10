<?php
abstract class Shape
{//class properties
    protected $height;
    protected $width;
//Constructor
    function __construct($height, $width)
    {
        $this->height = $height;
        $this->$width = $width;
    }
}