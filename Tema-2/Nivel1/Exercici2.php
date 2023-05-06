<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
</head>
<body>
    <header>
        <h1>Exercici 2</h1>
    <p>Imprimeix per pantalla <strong>"Hello, World!"</strong> utilitzant una variable. En acabat:</p>
</header>
<section>
    <ul>
    <li>Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.</li>
    <li>Imprimeix per pantalla la mida (longitud) de la variable.</li>
    <li>Imprimeix per pantalla l'string en ordre invers de caràcters.</li>
    <li>Crea una nova variable amb el contingut <strong>“Aquest és el curs de PHP”</strong> i imprimeix per pantalla la concatenació de tots dos strings.</li>
    </ul>
</section>
<div>
    <?php 
    //Creating and printing $hi
    $hi = 'Hello, World!';
    echo $hi;
    
    //Convert to uppercase
    $HI = strtoupper($hi);
    echo "<br> To uppercase: ".$HI."<br>";
    //Getting $hi's Lenght
    echo 'Lenght of $hi: '.strlen($hi)."<br>";
    //Printing reversed
    echo 'reverse of $hi: '.strrev($hi)."<br>";
    //Creating new presentation, $pres, variable
    $pres='Aquest és el curs de  PHP';
    //Concatenating Strings
    echo $hi.$pres;

    ?>
</div>
</body>
</html>