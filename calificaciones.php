<?php 


$alumnos = [
    "Juan" => 8,
    "Magdiel" => 9,
    "Hugo" => 7,
    "Jhonny" => 6,
    "Soft" => 10
];

echo "Calificaciones antes de ordenar:\n";
echo "<br>";
foreach ($alumnos as $alumno => $calificacion) {
    echo "La calificación de $alumno es $calificacion\n";
    echo "<br>";
}

asort($alumnos);

echo "\nCalificaciones después de ordenar:\n";
echo "<br>";
foreach ($alumnos as $alumno => $calificacion) {
    echo "La calificación de $alumno es $calificacion\n";
    echo "<br>";
}
?>
