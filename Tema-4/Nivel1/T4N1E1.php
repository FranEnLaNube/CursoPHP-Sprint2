<?php

//Creating class employee
class Employee
{
    //Atributes/properties
    public $name;
    public $wage;
    //Method 'initialize' with 'nom' and 'sou' as a parameter
    function initialize($name, $wage)
    {
        $this->name = $name;
        $this->wage = $wage;
    }
    function print($wage)
    {
        return ($wage <= 6000 ? " no" : '');
    }
}
