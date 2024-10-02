<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir Palabra a Mayúscula o Minúscula</title>
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

<h2>Convertir una Palabra</h2>

<form method="post">
    <label for="palabra">Introduce una palabra o varias palabras:</label>
    <input type="text" id="palabra" name="palabra" required>
    <br><br>

    <label for="conversion">Elige una opción:</label>
    <select id="conversion" name="conversion">
        <option value="mayuscula">Convertir a Mayúscula</option>
        <option value="minuscula">Convertir a Minúscula</option>
    </select>
    <br><br>

    <input type="submit" value="Convertir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = $_POST['palabra'];
    $conversion = $_POST['conversion'];

    if ($conversion == "mayuscula") {
        // Convertir la palabra a mayúscula
        echo "<p>La palabra convertida a mayúscula es: <strong>" . strtoupper($palabra) . "</strong></p>";
    } else {
        // Convertir la palabra a minúscula
        echo "<p>La palabra convertida a minúscula es: <strong>" . strtolower($palabra) . "</strong></p>";
    }
}
?>

</body>
</html>
