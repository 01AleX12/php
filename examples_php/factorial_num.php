<?php
$n = 5;

// Función para calcular el factorial de un número
function miFactorial($n){
    $factorial = 1; // Inicializamos la variable en 1

    // Bucle para calcular el factorial
    for ($i = $n; $i > 0; $i--){
        $factorial *= $i; // Multiplicamos el acumulador por cada número decreciente
    }

    return $factorial;
}

// Llamada a la función y mostrar el resultado
echo "El factorial de " . $n . " es " . miFactorial($n);
?>
