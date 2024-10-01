<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        form {
            margin-bottom: 20px;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2>Formulario de Compra</h2>

<form method="POST" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="categoria">Categoría de Producto:</label>
    <select id="categoria" name="categoria" required>
        <option value="Electrónica">Electrónica</option>
        <option value="Ropa">Ropa</option>
        <option value="Alimentos">Alimentos</option>
    </select><br><br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" required min="1"><br><br>

    <label for="descuento">¿Aplicar descuento del 10%?</label>
    <input type="checkbox" id="descuento" name="descuento"><br><br>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario

    //htmlspecialchars lo que hace es convertir todo a string, hasta los simbolos especiales como <>, _, ()...
    $nombre = htmlspecialchars($_POST['nombre']);
    $categoria = htmlspecialchars($_POST['categoria']);

    //lo que hace floatval es transformar el numero que se inserte a float
    $cantidad = floatval($_POST['cantidad']);
    $descuentoAplicado = isset($_POST['descuento']);  // isset lo que hace es comprobar que el campo no es null

    // Calcular el descuento si aplica
    if ($descuentoAplicado) {
        $descuento = $cantidad * 0.10;
        $cantidadFinal = $cantidad - $descuento;
    } else {
        $cantidadFinal = $cantidad;
    }

    // Mostrar el resultado
    echo "<div class='result'>";
    echo "<h3>Resultado de la Compra</h3>";
    echo "<p><strong>Nombre del Usuario:</strong> $nombre</p>";
    echo "<p><strong>Categoría Seleccionada:</strong> $categoria</p>";
    echo "<p><strong>Cantidad Original:</strong> $$cantidad</p>";

    if ($descuentoAplicado) {
        echo "<p><strong>Descuento Aplicado:</strong> 10% ( $$descuento )</p>";
        echo "<p><strong>Cantidad Final con Descuento:</strong> $$cantidadFinal</p>";
    } else {
        echo "<p><strong>No se aplicó ningún descuento.</strong></p>";
    }

    echo "</div>";
}
?>
</body>
</html>
