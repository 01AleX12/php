<html>
<head>
    <title>Problema</title>
</head>
<body>

<?php
    //muestra los numeros de los días del uno a la fecha de hoy;
    $dia = date("d");
    $inicio = 1;
    while ($inicio <= $dia) {
        echo $inicio . "<br>";
        $inicio++;
    }
?>

</body>
</html>