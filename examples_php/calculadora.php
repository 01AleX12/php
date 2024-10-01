<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
        }
        .container {
            background-color: burlywood;
            width: 300px;
            margin: 0 auto;
            padding: 20px 30px 20px 20px;
            border: 2px solid black;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        .buttons input {
            width: 50px;
            padding: 10px;
            margin: 30px 5px 20px 5px;
            font-size: 16px;
        }
        .resultado {
            margin-top: 10px;
        }

        input {
            background-color: cornsilk ;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Calculadora PHP</h2>

    <form class="post" method="POST">
        <label for="numero1">Operando 1</label><br>
        <input type="text" name="numero1" id="numero1" required><br>

        <label for="numero2">Operando 2</label><br>
        <input type="text" name="numero2" id="numero2" required><br>

        <div class="buttons">
            <input type="submit" name="operacion" value="+">
            <input type="submit" name="operacion" value="-">
            <input type="submit" name="operacion" value="*">
            <input type="submit" name="operacion" value="/">
        </div>
    </form>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["numero1"];
            $num2 = $_POST["numero2"];
            $operacion = $_POST["operacion"]; // Capturamos la operación

            // Verificación de que los valores sean numéricos
            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($operacion) {
                    case "+":
                        $resultado = $num1 + $num2;
                        break;
                    case "-":
                        $resultado = $num1 - $num2;
                        break;
                    case "*":
                        $resultado = $num1 * $num2;
                        break;
                    case "/":
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                        } else {
                            $resultado = "Error: División por cero";
                        }
                        break;
                    default:
                        $resultado = "Operación no válida";
                        break;
                }
                echo "<p>Resultado: $resultado</p>";
            } else {
                echo "<p>Error: Ingresa números válidos.</p>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
