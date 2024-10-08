<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  //esto genera un valor aleatorio de 1 a 100 y luego comprueba sus digitos
  $valor = rand(1, 100);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 9) {
    echo "Tiene un dígito";
  } else {
    if ($valor < 100) {
      echo "Tiene 2 dígitos";
    } else {
      echo "Tiene 3 dígitos";
    }
  }
  ?>

</body>

</html>