<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Cadenas Alfabéticamente</title>
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
<h2>Comparar Cadenas de Texto Alfabéticamente</h2>

<form method="post">
    <label for="cadena1">Primera Cadena:</label>
    <input type="text" id="cadena1" name="cadena1" required>
    <br><br>

    <label for="cadena2">Segunda Cadena:</label>
    <input type="text" id="cadena2" name="cadena2" required>
    <br><br>

    <input type="submit" value="Comparar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las cadenas ingresadas por el usuario
    $cadena1 = $_POST['cadena1'];
    $cadena2 = $_POST['cadena2'];

    // Comparar las cadenas usando strcmp
    $resultado = strcmp($cadena1, $cadena2);

    // Mostrar el resultado de la comparación
    if ($resultado < 0) {
        echo "<p><strong>'$cadena1'</strong> es menor alfabéticamente que <strong>'$cadena2'</strong>.</p>";
    } elseif ($resultado > 0) {
        echo "<p><strong>'$cadena1'</strong> es mayor alfabéticamente que <strong>'$cadena2'</strong>.</p>";
    } else {
        echo "<p>Las cadenas <strong>'$cadena1'</strong> y <strong>'$cadena2'</strong> son iguales.</p>";
    }
}
?>

</body>
</html>

