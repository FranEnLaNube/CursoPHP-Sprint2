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
            //Probando varios valores
            //Al poner varios tests casos juntos solo te muestra el primer error que encuentra|
            //y sale de la función
        $number1 = 10; // Número par
        $number2 = 11; // Número impar
        $number3 = 0; // Par
        $number4 = -8; // Número par negativo
        $number5 = -13; // Número impar negativo
        $number6 = 13.5; // Número decimal
        $number7 = "23"; // String

        //Instanciando
        $numberChecker1 = new NumberChecker($number1);
        $numberChecker2 = new NumberChecker($number2);
        $numberChecker3 = new NumberChecker($number3);
        $numberChecker4 = new NumberChecker($number4);
        $numberChecker5 = new NumberChecker($number5);
        $numberChecker6 = new NumberChecker($number6);
        $numberChecker7 = new NumberChecker($number7);
        
        // Act: Ejecutando el método a probar
        $result1 = $numberChecker1->isEven();
        $result2 = $numberChecker2->isEven();
        $result3 = $numberChecker3->isEven();
        $result4 = $numberChecker4->isEven();
        $result5 = $numberChecker5->isEven();
        $result6 = $numberChecker6->isEven();
        $result7 = $numberChecker7->isEven();
        
        // Assert: Usando el test
        $this->assertTrue($result1, 'el número debería ser par');
        //Aqui es NotTrue porque es impar el dato pasado
        $this->assertNotTrue($result2, 'el número debería ser impar');
        $this->assertTrue($result3, 'el número debería ser par');
        $this->assertTrue($result4, 'el número debería ser par');
        //Aqui es NotTrue porque es impar el dato pasado
        $this->assertNotTrue($result5, 'el número debería ser impar');
        $this->assertTrue($result6, 'el número no debería ser ni par ni impar');
        //Aqui acepta el string porque es equal y no same en la función IsEven()
        $this->assertTrue($result7, 'debería dar error');
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