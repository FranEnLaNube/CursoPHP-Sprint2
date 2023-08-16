<html>
<body>
<h1>Exercici 1</h1>
<p>
    Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
</p>
<h2>Solució:</h2>
</body>
</html>
<?php 
require_once 'Gat.php';
require_once 'Gos.php';
//initialize object garfield from the class Gat
$garfield = new Gat;
//Setting $name to $garfield
$garfield->name = "Garfield";
//Printing Garfield's greeting
echo "Hola sóc el gat ".$garfield->name.' i faig '.$garfield->makeSound()."\n";

//initialize object pluto from the class Gos
$pluto = new Gos;
//Setting $name to $pluto
$pluto->name = "Pluto";
//Printing Pluto's greeting
echo "Hola sóc el gos ".$pluto->name.' i faig '.$pluto->makeSound();
?>