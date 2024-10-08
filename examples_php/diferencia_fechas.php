<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Diferencia de Fechas</title>
</head>
<body>
<h2>Introduce dos fechas para calcular la diferencia</h2>
<form method="POST" action="">
    <label for="fecha1">Fecha 1 (YYYY-MM-DD):</label>
    <input type="date" id="fecha1" name="fecha1" required><br><br>

    <label for="fecha2">Fecha 2 (YYYY-MM-DD):</label>
    <input type="date" id="fecha2" name="fecha2" required><br><br>

    <input type="submit" name="calcular" value="Calcular diferencia">
</form>
<?php

//Recogemoes las fechas cuando se envíe el formulario
if (isset($_POST['calcular'])) {
    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];

    //Convertir las fechas a marcas de tiempo usando strtotime()
    $timestamp1 = strtotime($fecha1);
    $timestamp2 = strtotime($fecha2);

    // Asegurarse de que fecha1 es menor que fecha2, si no, intercambiarlas
    if ($timestamp1 > $timestamp2) {
        list($timestamp1, $timestamp2) = array($timestamp2, $timestamp1);
    }

    // Paso 4: Calcular la diferencia en segundos
    $diferenciaSegundos = $timestamp2 - $timestamp1;

    // Convertir la diferencia de segundos a días
    $totalDias = floor($diferenciaSegundos / (60 * 60 * 24));

    // Calcular los años, meses y días restantes
    $anos = floor($totalDias / 365);
    $meses = floor(($totalDias % 365) / 30);
    $dias = ($totalDias % 365) % 30;

    // Mostrar el resultado
    echo "<h3>Diferencia entre las fechas:</h3>";
    echo "<p>Años: $anos, Meses: $meses, Días: $dias</p>";
}
?>
</body>
</html>
