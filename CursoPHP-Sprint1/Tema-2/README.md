# Entrega d'exercici: PHP bàsics (Tema 2)

### Descripció

Posa en pràctica el que vas aprendre a fonaments de la programació (o el que no et va fer falta aprendre a fonaments de la programació) però adaptat a PHP! En aquesta entrega ens centrarem en variables, condicionals, bucles, funcions, constants i operacions bàsiques! Deixarem la pràctica amb arrays per al següent tema.

## Nivell 1

## - Exercici 1

Defineix una variable de cada tipus: **integer, double, string i boolean**. Imprimeix-les per pantalla.

Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.


## - Exercici 2
Imprimeix per pantalla **"Hello, World!"** utilitzant una variable. En acabat:

Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut **“Aquest és el curs de PHP”** i imprimeix per pantalla la concatenació de tots dos strings.

## - Exercici 3
- a Declara dues variables **X i Y** de tipus int, dues variables **N i M** de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a **X i Y**:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.

Per **N i M** realitzaràs el mateix.

Per a totes les variables (X, Y, N, M):

El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables.
- b Crea una funció **Calculadora** que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.


## - Exercici 4
Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.


## - Exercici 5
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.

## - Exercici 6
Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

**Important**

Consell: pot ser que la funció `rand()` et resulti útil.

## Nivell 2
## - Exercici 1
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:
- Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
- Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.

## - Exercici 2
Imagina que som a una botiga on es ven:
- Xocolata: 1 euro
- Xiclets: 0,50 euros
- Caramels: 1,50 euros

Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus.
Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

`funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5`

Sent, per tant, el total, 4.
## Nivell 3
## - Exercici 1
El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat.

Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, de tal forma que puguem invocar la funció per a un número concret.

Per saber més -> [Criba de Eratóstenes](https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes).