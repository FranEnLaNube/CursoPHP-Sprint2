<?php
//Función que chequea si una letra está presente en todas las palabras de otro array
function checker($words, $char)
{
    //Obtengo cantidad de elementos del array
    $words_len = count($words);
    //Inicializo contador, que tiene que llegar al $words_len para que sea TRUE
    $counter = 0;
    //Prevengo error con la capitalización de las palabras, str_contains() daría false
    $char = strtolower($char);
    //Recorro todas las palabras del array
    for ($i = 0; $i < $words_len; $i++) {
        if (str_contains($words[$i], $char)) {
            //Si encuentra la letra, sumo 1 al contador
            $counter++;
        }
    }
    //Si el contador llega al largo del array, es TRUE
    if ($counter == $words_len) {
        echo "TRUE";
    } else {
        echo "FALSE";
    }
}
checker(['Pedro', 'Roberto', 'Martin', 'Mariano'], 'R');
