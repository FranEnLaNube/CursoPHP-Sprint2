<html>

<ol> 
<li>Declara dues variables <strong>X i Y</strong> de tipus int, dues variables <strong>N i M</strong> de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a </strong>X i Y</strong>:</li>
<ul>

<li>El valor de cada variable.</li>
<li>La suma.</li>
<li>La resta.</li>
<li>El producte.</li>
<li>El mòdul.</li>
<li>Per <strong>N i M</strong> realitzaràs el mateix.</ul>

Per a totes les variables (X, Y, N, M):
<ul>
<li>El doble de cada variable.</li>
<li>La suma de totes les variables.</li>
<li>El producte de totes les variables.</li>
</ul>
<li>Crea una funció <strong>Calculadora</strong> que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.</li>
</ol>

<ul>
    <li>Operaciones con X e Y</li>
<?php 
//Declaring variables
$X= 1;
$Y= 2;
$N= 3.4;
$M= 4.5;
//Printing X and Y
echo 'X= '.$X.'<br>';
echo 'Y= '.$Y.'<br>';
//Printing operations with X and Y
echo 'X + Y= '.$X+$Y.'<br>';
echo 'X - Y= '.$X-$Y.'<br>';
echo 'X * Y= '.$X*$Y.'<br>';
echo 'X % Y= '.$X%$Y.'<br>';
?>
<li>Operaciones con N y M</li>
<?php 
//Printing X and Y
echo 'N= '.$N.'<br>';
echo 'M= '.$M.'<br>';
//Printing operations with X and Y
echo 'N + M= '.$N+$M.'<br>';
echo 'N - M= '.$N-$M.'<br>';
echo 'N * M= '.$N*$M.'<br>';
echo 'N % M= '.$N%$M.'<br>';
?>
<li>El doble de cada variable</li>
<?php 
echo 'X * 2 = '.($X * 2).'<br>';
echo 'Y * 2 = '.($Y * 2).'<br>';
echo 'N * 2 = '.($N * 2).'<br>';
echo 'M * 2= '.($M * 2).'<br>';
?>
</ul>
</html>