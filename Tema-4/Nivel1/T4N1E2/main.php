<html>
<h1>Tema 4, Nivel 1, Exercici 2:</h1>
<h2>Enunciado:</h2>
<p>Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().</p>
<h2>Solució:</h2>
<?php 
//Calling rectangle to get its class
require 'rectangle.php';
//Creating object rectangle with its own meassures
$myRectangle = new Rectangle(5,4);
//Calling rectangle to get its class
require 'triangle.php';
//Creating object triangle with its own meassures
$myTriangle = new Triangle(67,43);
//Printing rectangle's area
echo 'El area del rectángulo con '.$myRectangle->getHeight().' de alto y '.$myRectangle->getWidth().' de ancho es: '.$myRectangle->area();
echo "<br>";
//Printing triangle's area
echo 'El area del triángulo con '.$myTriangle->getHeight().' de alto y '.$myTriangle->getWidth().' de ancho es: '.$myTriangle->area();
?>
</html>