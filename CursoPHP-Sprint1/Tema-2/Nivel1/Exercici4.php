<html>
<H1>Exercici 4</H1>
<p>Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.</p>
<?php
function counter($jump = 1, $finalNumber = 10)
{
    for ($i = 0; $i <= $finalNumber; $i += $jump) {
        echo $i . '<br>';
    }
}
// Hubiera sido mejor hacerlo con range($inicio, $fin, $pasos); poniendo fin = 10 y asignarle el salto también
counter(2);
?>

</html>