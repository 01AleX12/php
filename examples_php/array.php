<?php

function dias() {
    // Definir dos arrays con día, mes, y año
    $array1 = ['24', '8', '2024']; // Fecha inicial
    $array2 = ['25', '8', '2024']; // Fecha final

    // Convertir los arrays en fechas en formato de cadena "día-mes-año"
    $fecha1 = $array1[2] . '-' . $array1[1] . '-' . $array1[0]; // "2024-08-24"
    $fecha2 = $array2[2] . '-' . $array2[1] . '-' . $array2[0]; // "2024-08-25"

    // Convertir las fechas en timestamps
    $timestamp1 = strtotime($fecha1);
    $timestamp2 = strtotime($fecha2);

    // Si el orden no es correcto (fecha inicial > fecha final), devolver error -1
    if ($timestamp1 > $timestamp2) {
        return -1;
    }

    // Calcular la diferencia en segundos
    $diferenciaSegundos = $timestamp2 - $timestamp1;

    // Convertir la diferencia de segundos a días
    $totalDias = floor($diferenciaSegundos / (60 * 60 * 24));

    // Devolver la diferencia de días y las fechas originales
    return [$totalDias, $fecha1, $fecha2];
}

// Llamar a la función y obtener el resultado
list($resultado, $fecha1, $fecha2) = dias();

if ($resultado == -1) {
    echo "Error: La fecha inicial es mayor que la fecha final.";
} else {
    echo "Fecha inicial: " . $fecha1 . "<br>";
    echo "Fecha final: " . $fecha2 . "<br>";
    echo "La diferencia entre las fechas es de: " . $resultado . " días.";
}

?>
