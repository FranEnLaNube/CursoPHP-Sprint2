<html>
<h1>Tema 4, Nivel 1, Exercici 1:</h1>
<h2>Enunciado:</h2>
<p>Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).</p>
<h2>Solució</h2>

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
        return ($wage <= 6000 ? ' no paga impuestos.' : ' paga impuestos.');
    }
}
//Object instance 
$emp1 = new Employee;
$emp1->initialize('Carlos', '6000');
//Printing
echo $emp1->name . $emp1->print($emp1->wage)
?>

</html>