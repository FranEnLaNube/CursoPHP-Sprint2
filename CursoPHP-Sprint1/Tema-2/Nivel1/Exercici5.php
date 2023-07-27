<html>
<h1>Exercici 5</h1>
<p> Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.</p>
<h3>Condicions:</h3>
<ul>
    <li>Si la nota és 60% o més, el grau hauria de ser Primera Divisió.</li>
    <li>Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.</li>
    <li>Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.</li>
    <li>Si la nota és menor a 33%, l'estudiant reprovarà.</li>
</ul>
<h3>Resolució:</h3>
</html>
<?php
function classifier($mark)
{
    //Debería tener dos funciones separadas. Una validadora y otra para clasificar.
    // Porque la validación no es única del clasificador, aplicar especificidad    
    if ($mark <= 100 && $mark >= 60) {
        return 'Primera Divisió';
    } elseif ($mark < 60 && $mark >= 45) {
        return 'Segona Divisió';
    } elseif ($mark < 45 && $mark >= 33) {
        return 'Tercera Divisió';
    } elseif ($mark < 33 && $mark >= 0) {
        return 'Suspenet';
    } else {
        return 'Valor no vàlido';
    }
}
//          **Version to try in HTML**

/* $mark = 34;   //Here change the mark as you wish
echo classifier($mark); */

//          **Version to try in console**

echo "\nProvem 3 cops:\n\n";
for ($i=0; $i < 3; $i++) {
    $mark = readline('¿Quina nota has obtingut? ');
    echo classifier($mark) . "\n"; 
}
?>