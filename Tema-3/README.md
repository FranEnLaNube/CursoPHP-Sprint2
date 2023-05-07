# Arrays (Tema 3)

### Descripció

Posa en pràctica el que vas aprendre a fonaments de la programació (o el que no et va fer falta aprendre a fonaments de la programació) però adaptat a PHP! En aquesta entrega ens centrarem en variables, condicionals, bucles, funcions, constants i operacions bàsiques! Deixarem la pràctica amb arrays per al següent tema.

## Nivell 1

- ### Exercici 1

    Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.


- ### Exercici 2

    **`$X = array (10, 20, 30, 40, 50,60);`**
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.

- ### Exercici 3

    Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

    Per exemple:

    Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.


- ### Exercici 4

    Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

    - nom
    - edat
    - email
    - menjar favorit

## Nivell 2

- ### Exercici 1

    Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

    - La intersecció dels dos arrays (nombres en comú)
    - La mescla dels dos arrays.

- ### Exercici 2

    Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

    A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.

## Nivell 3

- ### Exercici 1

    - Donat un array d’enters, fes un programa que:

    - Retorni cada valor de l’array elevat al cub fent servir la funció **array_map()**.


- ### Exercici 2

    Donat un array d’strings, fes un programa que:

    Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció **array_filter()**.

- ### Exercici 3

    Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin **primers** fent servir la funció **array_reduce()**.