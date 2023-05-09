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
    //Function print depending on the employee's wage
    function print($wage)
    {
        return ($wage <= 6000 ?' no paga impuestos.' : ' paga impuestos.');
    }
}
//Object instance 
$emp1 = new Employee;
$emp1->initialize('Carlos', '7000');
//Printing
echo $emp1->name . $emp1->print($emp1->wage);