<?php
abstract class Shape
{ //class properties
    protected $height;
    protected $width;
    //Constructor
    function __construct($height, $width)
    {
        $this->height = $height;
        $this->$width = $width;
    }
    //abstract function to get area in inherited classes
    abstract protected function area($height, $width);
}
