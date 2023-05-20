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
<?php
function classifier($mark)
{
    if ($mark >= 0 && $mark <= 100) {
        if ($mark >= 60) {
            return 'Primera Divisió';
        } elseif ($mark >= 45) {
            return 'Segona Divisió';
        } elseif ($mark >= 33) {
            return 'Tercera Divisió';
        } else {
            return 'Suspenet';
        }
    } else {
        return 'nota no vàlida';
    }
}
echo classifier(-120)
?>

</html>