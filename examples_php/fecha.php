<?php
date_default_timezone_set('Europe/Madrid');
function fechaActual(){
    $fecha = date("d-m-Y H:i:s");
    return $fecha;
}

echo "la fecha acutal es: ".fechaActual();
?>