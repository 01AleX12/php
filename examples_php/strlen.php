<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Longitud de Cadenas</title>
</head>
<body>
<style>
    body {
        background: white;
        padding: 20px 15px 40px 15px;
        display: flex;
        border: 1px solid black;
        width: 50%;
        height: 50%;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    html {
        background: whitesmoke;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }
</style>

<h2>Comparar Longitud de Cadenas de Texto</h2>

<?php
$cadena1 = "Hola mundo";  // Definimos la primera cadena
$cadena2 = "adios mundo";  // Definimos la segunda cadena
$cadena3 = "buenas tardes mundo";  // Definimos la tercera cadena

// Verificamos cuál cadena tiene mayor longitud comparando las tres
if (strlen($cadena1) > strlen($cadena2) && strlen($cadena1) > strlen($cadena3)) {
    // Si la longitud de $cadena1 es mayor que las de $cadena2 y $cadena3
    echo "La mayor es la cadena: " . $cadena1;  // Imprime $cadena1 como la mayor
} elseif (strlen($cadena2) > strlen($cadena1) && strlen($cadena2) > strlen($cadena3)) {
    // Si la longitud de $cadena2 es mayor que las de $cadena1 y $cadena3
    echo "La mayor es la cadena: " . $cadena2;  // Imprime $cadena2 como la mayor
} else {
    // Si ninguna de las anteriores condiciones se cumple, $cadena3 es la mayor
    echo "La mayor es la cadena: " . $cadena3;  // Imprime $cadena3 como la mayor
}
?>

</body>
</html>
