<?php
Class MarkClassifier
{
    function classifier($mark)
    {
        //Finding whether a variable is a number or a numeric string
        if (is_numeric($mark)) {
            //Validating range
            if ($mark >= 0 && $mark <= 100) {
                //Classifying
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
        } else {
            return 'Entrada invàlida';
        }
    }
}
//Output
$mark = '-3';
$classifier = new MarkClassifier($mark);
echo $classifier->classifier($mark)
?>