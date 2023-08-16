<?php
/* ### Exercici 2

    Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

    A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
*/
$students = [
    'Student1' => [2, 4, 5, 8, 10], 'Student2' => [1, 3, 5, 8, 9], 'Student3' => [1, 4, 7, 5, 9]
];
/* var_dump($students);
print_r($students); */

function show_students_marks(array $students)
{
    foreach ($students as $student => $marks) {
        echo "Student: " . $student . "\nMarks: \n";
        foreach ($marks as $mark) {
            echo $mark . "\n";
        }
    }
}
function show_student_mean($students)
{
    $total_marks_sum = 0;
    foreach ($students as $student => $mark) {
        $student_marks_sum = array_sum($mark);
        $student_marks_quantity = count($mark);
        $mean = $student_marks_sum / $student_marks_quantity;
        $total_marks_sum += $student_marks_sum;

        echo "Student: " . $student . "\nMean: ";
        echo $mean . "\n";
    }
    $students_quantity = count($students);
    $total_marks_quantity = $students_quantity * $student_marks_quantity;
    $total_mean = $total_marks_sum / $total_marks_quantity;

    echo "Overall mean: " . $total_mean;
}
echo "Showing students marks\n";
show_students_marks($students);
echo "Showing the marks mean of each student\n";
show_student_mean($students);
