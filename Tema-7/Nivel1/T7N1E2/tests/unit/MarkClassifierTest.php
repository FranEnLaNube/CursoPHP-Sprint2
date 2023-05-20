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
require 'src/MarkCkassifier.php';

//Importando la clase TestCase, testeadora de PHPUnit
use PHPUnit\Framework\TestCase;

//Definir la clase de pruebas
class MarkClassifierTest extends TestCase
{
// Método de prueba para "Nota >= 60%"
public function testMarkGreater60()
{
    // Arrange: Preparando datos de prueba
    $mark = 70;

    // Act: Usando funcion testeadora
    $output = testClassifier($mark);

    // Assert: Verificación del resultado esperado
    $this->assertSame('Primera Divisió', $output);
}

// Otros métodos de prueba para los casos restantes
}