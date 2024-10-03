<?php

// Ejemplo

$num = 10; // Número decimal que queremos convertir
echo "El número binario de $num es: " . binario($num);

function binario($num) {

    //dejamos binario como vacio
    $binario = "";

    while ($num > 0) {
        $binario = ($num % 2).$binario;
        $num = (int)($num / 2); // Se actualiza el valor de $num
    }

    return $binario; // Se retorna el valor binario
}
?>