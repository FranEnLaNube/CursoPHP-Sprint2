# Tema 6 - Testing 
## Descripció
Juguem una mica amb una de les llibreries més utilitzades en testing per a PHP, PHPunit.
## - Nivell 1
### Exercici 1
Donada la classe NumberChecker programa els tests unitaris que facin falta per certificar que el codi font de la classe fa el que ha de fer.

**->classe NumberChecker**
### Exercici 2
Practiquem una mica de TDD. Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar per provar el seu correcte funcionament. Programa’ls i després ves realitzant el programa a testejar pas a pas segons valides els tests prèviament creats.
## - Nivell 2
### Exercici 1
Programa un DataProvider per a la classe Test de l’exercici 1 del nivell anterior i fes-lo servir.
### Exercici 2
Programa un DataProvider per a la classe Test de l’exercici 2 del nivell 1 i fes-lo servir.
## - Nivell 3
### Exercici 1
Necessitem crear un petit software per a tractament d’informació en una biblioteca. Per això necessitem representar la informació d’un llibre, que té:
- Un títol
- Un autor/autora
- Un ISBN
- Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
- Núm. de pàgines.

Necessitem emmagatzemar el conjunt de llibres i tenir mètodes que:

- Afegeixin, esborrin i modifiquin un llibre de la llibreria.
- Permetin consultar llibres per títol, gènere, ISBN o autor.
- Retornar llibres grans (més de 500 pàgines).

Desenvolupa mitjançant TDD aquest programa per tal de garantir que compleix totes les funcionalitats demanades per l’enunciat.