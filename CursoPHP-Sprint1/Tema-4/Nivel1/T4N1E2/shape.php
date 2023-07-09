<?php
abstract class Shape
{ //class properties
    protected $height;
    protected $width;
    //Constructor
    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    //Getters to get values from main
    public function getHeight(){
        return $this->height;
    }
    public function getWidth(){
        return $this->width;
    }
    //abstract function to get area in inherited classes
    abstract function area();
}
