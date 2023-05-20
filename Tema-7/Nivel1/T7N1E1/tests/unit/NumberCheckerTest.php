<?php 
//Archivo que se va a probar
require '../../src/NumberChecker.php';
//Importando la clase testeadora de PHPUnit
use PHPUnit\Framework\TestCase;
//Definir la clase de pruebas
class NumberCheckerTest extends TestCase
{
    //Método de prueba para verificar si el número es par
    public function testIsEven() : void
    {
        //Creando una instancia de la clase NumberChecker
        $numberChecker = new NumberChecker(10);

        //Comprobando si el número es par
        $this->assertTrue($numberChecker->isEven(), 'el número debería ser par');
    }
    //Método para probar si es positivo
    public function testIsPositive() : void
    {
        //Nuevo instancia de NumberChecker
        $numberChecker = new NumberChecker(-5);
        //Comprobando si es negativo
        $this->assertFalse($numberChecker->isPositive(), 'El número debería ser negativo');
    }
}    
?>

