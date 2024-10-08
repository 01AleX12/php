<html>
<head>
    <title>Ejemplo03</title>
</head>
<body>

<?php $a=1; ?>
    <p>Página de prueba</p>
    <?php
    $b=$a;
    print "La variable b vale ".$b;
    $ciclo="DAW";
    $modulo="DWES";
    print "<p>";
        printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
        print "</p>";
?>
</body>
</html>