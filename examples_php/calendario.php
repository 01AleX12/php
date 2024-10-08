<?php
// Configuración de festivos personalizados (formato: 'dd-mm')
$festivos = ['01-01', '25-12']; // Añadir otros festivos en formato 'dd-mm'

// Obtener el mes y año actuales
$mes = date('n');
$anio = date('Y');

// Obtener el día actual
$diaActual = date('j');

// Obtener el número de días en el mes actual
$diasEnMes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

// Obtener el primer día de la semana (0 = domingo, 1 = lunes, etc.)
$primerDiaSemana = date('w', strtotime("$anio-$mes-01"));

// Array para los nombres de los días de la semana
$diasSemana = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];

// Generar el calendario en HTML
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th colspan='7'>" . date('F Y') . "</th></tr>"; // Cabecera con el mes y año
echo "<tr>";

// Mostrar los nombres de los días de la semana
foreach ($diasSemana as $dia) {
    echo "<th>$dia</th>";
}
echo "</tr><tr>";

// Añadir celdas vacías antes del primer día del mes si no es lunes
if ($primerDiaSemana > 0) {
    for ($i = 0; $i < $primerDiaSemana; $i++) {
        echo "<td></td>";
    }
}

// Rellenar el calendario con los días del mes
for ($dia = 1; $dia <= $diasEnMes; $dia++) {
    // Obtener la fecha actual en formato 'dd-mm'
    $fechaFormateada = sprintf('%02d-%02d', $dia, $mes);

    // Verificar si es fin de semana (sábado o domingo)
    $esFinDeSemana = (date('w', strtotime("$anio-$mes-$dia")) == 0 || date('w', strtotime("$anio-$mes-$dia")) == 6);

    // Verificar si es día actual
    $esDiaActual = ($dia == $diaActual);

    // Verificar si es un festivo personalizado
    $esFestivo = in_array($fechaFormateada, $festivos);

    // Definir estilo para fines de semana, día actual y festivos
    $estilo = "";
    if ($esFestivo) {
        $estilo = "background-color: orange;"; // Color para festivos
    } elseif ($esDiaActual) {
        $estilo = "background-color: lightgreen;"; // Color para el día actual
    } elseif ($esFinDeSemana) {
        $estilo = "background-color: lightblue;"; // Color para fines de semana
    }

    // Mostrar el día en la celda con el estilo correspondiente
    echo "<td style='$estilo'>$dia</td>";

    // Si es el último día de la semana, empezar una nueva fila
    if (date('w', strtotime("$anio-$mes-$dia")) == 6) {
        echo "</tr><tr>";
    }
}

// Rellenar las celdas vacías al final de la tabla si el último día no es sábado
$ultimoDiaSemana = date('w', strtotime("$anio-$mes-$diasEnMes"));
if ($ultimoDiaSemana < 6) {
    for ($i = $ultimoDiaSemana + 1; $i <= 6; $i++) {
        echo "<td></td>";
    }
}

echo "</tr>";
echo "</table>";
?>
