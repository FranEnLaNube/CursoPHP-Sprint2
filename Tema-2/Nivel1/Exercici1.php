<?php 
/* **Exercici 1** 
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.

Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla. */

//Definiendo variables

//integer
$intVar = 5;
//double
$doubleVar = 3.5;
//String
$StringVar = 'MyString';
//boolean
$booleanVar = true;

//Imprimiendo

echo $intVar ."<br>";
echo $doubleVar ."<br>";
echo $StringVar ."<br>";
echo $booleanVar ."<br>";

//Creando constante

define('NAME', 'Francisco');

//Imprimiendo NAME en formato título

echo "<h1>".NAME."</h1>";

?>