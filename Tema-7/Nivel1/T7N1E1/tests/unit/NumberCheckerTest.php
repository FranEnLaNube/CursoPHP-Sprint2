<?php 
//Archivo que se va a probar
require 'src/NumberChecker.php';
//Importando la clase testeadora de PHPUnit
use PHPUnit\Framework\TestCase;
//Definir la clase de pruebas
class NumberCheckerTest extends TestCase
{
    //Método de prueba para verificar si el número es PAR

    public function testIsEven() : void
    {
        // Arrange: Preparación de los datos de prueba

        //almacenando el resultado de prueba en variable
        $number = 10;
        $numberChecker = new NumberChecker($number);
        
        // Act: Ejecutando el método a probar
        $result = $numberChecker->isEven();
        
        // Assert: Usando el test
        $this->assertTrue($result, 'el número debería ser par');
    }
    // Probando si el número no es IMPAR

    public function testIsOdd(): void
    {
        // Arrange: Preparando datos
        $number = 7;
        $numberChecker = new NumberChecker($number);

        // Act: Ejecutando método a probar
        $result = $numberChecker->isEven();

        // Assert: testeando
        $this->assertFalse($result, 'El número debería ser impar');
    }
    //Método para probar si es POSITIVO

    public function testIsPositive() : void
    {
        // Arrange: Preparación de los datos de prueba
        $number = -5;
        $numberChecker = new NumberChecker($number);
        
        // Act: Ejecutando el método a probar
        $result = $numberChecker->isPositive();
        
        // Assert: Usando el test
        $this->assertFalse($result, 'el número debería ser negativo');
        //Comprobando si es negativo
    }
    //Método para probar si es NEGATIVO

    public function testIsNegative() : void
    {
        // Arrange: Preparación de los datos de prueba
        $number = -15;
        $numberChecker = new NumberChecker($number);
        
        // Act: Ejecutando el método a probar
        $result = $numberChecker->isPositive();
        
        // Assert: Usando el test
        $this->assertTrue($result, 'el número debería ser negativo');
        //Comprobando si es negativo
    }

}    
?>