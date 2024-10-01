<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo PrintF SprintF</title>
</head>
<body>
    <?php
        //Printf imprime un mensaje por pantalla utilizando una “cadena de formato” que incluye las instrucciones para mezclar múltiples cadenas en la cadena final.
        $nombre = "Eloy";
        $edad = 24;
        printf("Nombre: %s". "<br>"/* \n */ ." Edad: %d", $nombre, $edad);
    ?>
    <br><br>
    <?php
        //SprintF almacena en una variable la cadena de texto que puede estar compuesta por varias variables.
        $num = 10;
        $pi = 3.14;
        $resultado = sprintf("El número es: " .$num. " y Pi es: " .$pi);
        echo $resultado;
    ?>
</body>
</html>