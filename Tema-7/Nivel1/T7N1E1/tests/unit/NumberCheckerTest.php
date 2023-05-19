<?php 
//Archivo que se va a probar
require 'src/numberChecker.php';
//Importando la clase testeadora de PHPUnit
use PHPUnit\Framework\TestCase;
//Definir la clase de pruebas
class NumberCheckerTest extends TestCase
{

}
?>
<!-- 

Clase original a chequear
    
class NumberChecker  {

    
    public function __construct(private int $number){}
    
    public function isEven(): bool {
        return $this->number%2 == 0;
}
public function isPositive(): bool {
    return $this->number > 0;
}

Exemple de test tipus

2. Tamany d’entrada de dades
    ● Cas 0 elements. Què passa si no entra res.
    ● Cas 1 element.
    ● Cas menor més interessant.
    ● Cas major més interessant.
    3. Dicotomies
    ● Parell/Imparell
    ● Positiu/Negatiu/0
    ● Vocal/Consonant
    ● Buit/No buit
    4. Ordre
    ● ¿L’ordre d’entrada de dades,varia el resultat a retornar?
5. Limits
    ● Tenir en compte els valors llindar(si existeixen)
} -->