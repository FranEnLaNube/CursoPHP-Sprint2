<html>
<h1>Exercici 6</h1>
<h3>Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.</h3>
<ul>
    <li>Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.</li>
</ul>
<h3>Important</h3>
<p><strong>Consell:</strong> pot ser que la funció rand () et resulti útil.</p>
<h3>Resolució:</h3>
<?php 
function isBitten()
{
    return  var_dump((bool)rand(0,1));
}
echo isBitten();

?>