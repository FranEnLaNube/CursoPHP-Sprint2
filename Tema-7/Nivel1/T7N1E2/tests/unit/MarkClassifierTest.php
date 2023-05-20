<html>
<h1>Exercici a testejar, a programar amb TDD:</h1>
<h2>Exercici 5</h2>
<p> Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.</p>
<h3>Condicions:</h3>
<ul>
    <li>Si la nota és 60% o més, el grau hauria de ser Primera Divisió.</li>
    <li>Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.</li>
    <li>Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.</li>
    <li>Si la nota és menor a 33%, l'estudiant reprovarà.</li>
</ul>
<h3>Resolució:</h3>
<?php
//Posibles cosas a testear:
//Nota fuera de rango general
    //Negativo
    //Mayor a 100
//Evaluar salida de cada rango
//Parametro de tipo incorrecto
//Numero decimal

//TESTEO

// Importando clase con función a probar
require 'src/MarkClassifier.php';

//Importando la clase TestCase, testeadora de PHPUnit
use PHPUnit\Framework\TestCase;

//Definir la clase de pruebas
class MarkClassifierTest extends TestCase
{
    // Método de prueba para "Nota > 100%"
    public function testMarkGreater100()
    {
        // Arrange: Preparando datos de prueba
        $mark = 170;
    
        // Act: Usando funcion testeadora
        $output = Classifier($mark);
    
        // Assert: Verificación del resultado esperado
        $this->assertSame('Nota fora de rang', $output, 'Debería dar "Nota fora de rang"');
    }
    // Método de prueba para "Nota >= 60%"
    public function testMarkGreater60()
    {
        // Arrange: Preparando datos de prueba
        $mark = 70;

        // Act: Usando funcion testeadora
        $output = Classifier($mark);

        // Assert: Verificación del resultado esperado
        $this->assertSame('Primera Divisió', $output, 'debería dar "primera divisió"');
    }
    // Método de prueba para "Nota < 60%"
    public function testMarkSmaller60()
    {
        // Arrange: Preparando datos de prueba
        $mark = 59;

        // Act: Usando funcion testeadora
        $output = Classifier($mark);

        // Assert: Verificación del resultado esperado
        $this->assertSame('Segona Divisió', $output, 'debería dar "segona divisió"');
    }
    // Método de prueba para "Nota < 45%"
    public function testMarkSmaller45()
    {
        // Arrange: Preparando datos de prueba
        $mark = 44;

        // Act: Usando funcion testeadora
        $output = Classifier($mark);

        // Assert: Verificación del resultado esperado
        $this->assertSame('Tercera Divisió', $output, 'debería dar "tercera divisió"');
    }
    // Método de prueba para "Nota <33%"
    public function testMarkSmaller33()
    {
        // Arrange: Preparando datos de prueba
        $mark = 32;

        // Act: Usando funcion testeadora
        $output = Classifier($mark);

        // Assert: Verificación del resultado esperado
        $this->assertSame('Tercera Divisió', $output, 'debería dar "tercera divisió"');
    }
    // Método de prueba para "Nota <0%"
    public function testMarkNegative()
    {
        // Arrange: Preparando datos de prueba
        $mark = -2;

        // Act: Usando funcion testeadora
        $output = Classifier($mark);

        // Assert: Verificación del resultado esperado
        $this->assertSame('Nota fora de rang', $output, 'Debería dar "Nota fora de rang"');
    }
    // Método de prueba para "Nota = 0"
    public function testMarkZero()
    {
        // Arrange: Preparando datos de prueba
        $mark = 0;

        // Act: Usando funcion testeadora
        $output = Classifier($mark);

        // Assert: Verificación del resultado esperado
        $this->assertSame('Nota fora de rang', $output, 'Debería dar "Nota fora de rang"');
    }
    // Método de prueba para "entrada de otro tipo"
    public function testMarkString()
    {
        // Arrange: Preparando datos de prueba
        $mark = 'Hi!';

        // Act: Usando funcion testeadora
        $output = Classifier($mark);

        // Assert: Verificación del resultado esperado
        $this->assertSame('Entrada invàlida', $output, 'Debería dar "Entrada invàlida"');
    }

// Otros métodos de prueba para los casos restantes
}