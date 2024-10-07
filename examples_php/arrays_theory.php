<p>EJEMPLO CON COUNT</p>
<?php
// Crear un array
$frutas = array("Manzana", "Naranja", "Plátano", "Fresa");

// Contar el número de elementos en el array
$total_frutas = count($frutas);

// Imprimir el total
echo "El número total de frutas es: " . $total_frutas;
?>
<br>
<p>EJEMPLO CON ARRAY PUSH</p>
<?php
// Crear un array
$frutas = array("Manzana", "Naranja");

// Agregar más elementos al array usando array_push
array_push($frutas, "Plátano", "Fresa");

// Contar el número de elementos en el array
$total_frutas = count($frutas);

// Imprimir el total
echo "El número total de frutas es: " . $total_frutas;
?>
<br><br>
<p>EJEMPLO CON ARRAY POP</p>
<?php
// Crear un array
$frutas = array("Manzana", "Naranja", "Plátano", "Fresa");

// Eliminar el último elemento del array usando array_pop
array_pop($frutas); // Esto eliminará "Fresa"

// Contar el número de elementos en el array
$total_frutas = count($frutas);

// Imprimir el total
echo "El número total de frutas es: " . $total_frutas;
?>
<br><br>
<p>EJEMPLO CON ARRAY IN_ARRAY</p>
<?php
// Crear un array
$frutas = array("Manzana", "Naranja", "Plátano", "Fresa");

// Verificar si "Plátano" está en el array usando in_array
if (in_array("Plátano", $frutas)) {
    echo "Plátano está en el array.<br>";
} else {
    echo "Plátano no está en el array.<br>";
}

// Contar el número de elementos en el array
$total_frutas = count($frutas);

// Imprimir el total
echo "El número total de frutas es: " . $total_frutas;
?>
