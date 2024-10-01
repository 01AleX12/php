<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRO</title>
</head>
<body>

<form method="POST" action="">
    <h1 class="h1">REGISTRO</h1>
    <div class="labels">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" placeholder="Nombre" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email" required><br><br>

    <label for="contraseña">Contraseña:</label>
    <input type="password" name="password" placeholder="Contraseña" required><br><br>

    <label for="contraseña_confirmed">Confirmar contraseña:</label>
    <input type="password" name="password_confirmed" placeholder="Confirmar contraseña" required><br><br>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" placeholder="Edad" required><br><br>

    <label for="Género">Género:</label>
    <select name="genero" id="">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select><br><br>

    <input type="checkbox" id="terms" name="terms" required>
    <label for="terms">Aceptar los términos y condiciones</label><br><br>

    <br>
    <input type="submit" value="Registrarse"><br><br>
    </div>

    <style>
        html {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0px;
            background-image: url(https://img.freepik.com/vector-gratis/fondo-monocromatico-blanco-estilo-papel_52683-66443.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 0px;
        }
        form {
            font-family: Verdana;
            border-radius: 10px;
            justify-content: center;
            margin-top: 10rem;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.1); /
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25);
            width: 400px;
        }
        .h1 {
            margin-top: -5px;
            margin-bottom: 30px;
            text-align: center;
        }
        input {
            padding: 2px;
            margin-bottom: 5px;
        }

        select {
            padding: 2px;
        }

        .labels {
            text-align: justify;
            flex-direction: column;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: grey;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        input[type="submit"]:hover {
            color: black;
            background-color: rgba(137,141,148,0.50);
        }


    </style>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Capturando los valores enviados por el formulario

        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password_confirmed = $_POST["password_confirmed"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $terms = isset($_POST["terms"]); // Validación de términos y condiciones

        if (preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email) && $password == $password_confirmed) {
            if (!$terms) {
                echo "Debes aceptar los términos y condiciones.<br>";
            } else {
                // Si todo es válido, procesa los datos

                echo "NOMBRE: $nombre <br>";
                echo "EMAIL: $email <br>";
                echo "PASSWORD: $password <br>";
                echo "EDAD: $edad <br>";
                echo "GÉNERO: $genero <br>";
            }
        } else {
            // Mostrar errores si las validaciones fallan
            if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
                echo "El email debe ser un correo válido de Gmail.<br>";
            }
            if ($password != $password_confirmed) {
                echo "Las contraseñas no coinciden.<br>";
            }
        }
    }
    ?>
</body>
</html>

