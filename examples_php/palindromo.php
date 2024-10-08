<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo</title>
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

<h2>Comprobar si una palabra o frase es un Palíndromo</h2>

<form method="post">
    <label for="texto">Introduce una palabra o frase:</label>
    <input type="text" id="texto" name="texto" required>
    <br><br>
    <input type="submit" value="Verificar">
</form>

<?php
function palindromo($cadena) {
    // Convertimos la cadena a minúsculas
    $cadena = strtolower($cadena);

    // Eliminamos los espacios
    $cadena = str_replace(' ', '', $cadena);

    // Invertimos la cadena
    $cadenaInvertida = strrev($cadena);

    // Verificamos si la cadena original es igual a la cadena invertida
    return $cadena == $cadenaInvertida;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];

    // Comprobamos si es un palíndromo
    if (palindromo($texto)) {
        echo "<p>'$texto' es un palíndromo.</p>";
    } else {
        echo "<p>'$texto' no es un palíndromo.</p>";
    }
}
?>

</body>
</html>
