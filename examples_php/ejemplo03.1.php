<html>
<head>
    <title>Ejemplo03</title>
</head>
<body>

<?php $a=1; ?>
    <p>Página de prueba</p>
    <?php
    $num=7;
    $nombre="alex $num aranda";
    $n2='eloy $num gonzalez';
    print $nombre ."<br>";
    print $n2 ."<br>";
    print '"Pepe"' ."<br>";
    print "'Pepe'" ."<br>";

    $n3=69;
    $n3+=4;// $n3= $n3 + 4
    print $n3 ."<br>";

    $nombre.=" fin";
    print $nombre ."<br>";

    // sintaxis heredoc
    $a = "Módulo ";
    $b = $a . "DWES"; // ahora $b contiene "Módulo DWES"
    $a .= "DWES"; // ahora $a también contiene "Módulo DWES"

    $n1 = 5.8;
    $n2 = (int)$n1 * 2; // casteo, pasando n1 de float a int
    print "el valor es $n2";

    $a = $b = "3.1416"; // asignamos a las dos variables la misma cadena de texto
    settype($b, "float"); // y cambiamos $b a tipo float
    print "\$a vale $a y es de tipo ".gettype($a);
    print "<br />";
    print "\$b vale $b y es de tipo ".gettype($b);

    $a = "3.1416";
    if (isset($a)) // la variable $a está definida
        print 'la variable $a existe'."<br>";
    else
        print 'la variable $a no existe'."<br>";
    unset($a); //ahora ya no está definida

    if (isset($a)) // la variable $a está definida
        print 'la variable $a existe'."<br>";
    else
        print 'la variable $a no existe'."<br>";

    ?>
</body>
</html>