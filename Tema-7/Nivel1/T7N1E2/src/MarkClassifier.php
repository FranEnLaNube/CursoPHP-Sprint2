<?php
Class MarkClassifier
{
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
        return 'Nota fora de rang';
        }
    }
}
/* echo classifier(-120) */
?>