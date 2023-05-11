<html>
<body>
<h1>Exercici 1</h1>
<p>
    Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
</p>
<?php 
//Interface Animal which is implemented for Gos and Gat
interface Animal
{
    //makeSound methode empty and public
    public function makeSound();
}
//Class Gos who implements Animal to use makeSound in it.
class Gos implements Animal {
    //Own property
    public $name;
    public function makeSound(){
        echo "Bup, bup!";
    }
}
//Class gat similar to Gos
class Gat implements Animal {
    public $name;
    public function makeSound(){
        echo "Mèu";
    }
}
//initialize object garfield from the class Gat
$garfield = new Gat;
//Setting $name to $garfield
$garfield->name = "Garfield";


?>
</body>
</html>