<?php
include "header.php";

function salto(){
    echo "<br>";
}
date_default_timezone_set('Europe/Madrid');
setlocale(LC_ALL, 'es_ES');



//date (string del formato)
echo "Fecha de hoy-> ".date("d-m-Y");
salto();
//date con horas
echo "Fecha y hora actual-> ".date("d/m/y  H:i:s");
salto();

//día de la semana en ingles
echo "Hoy es-> ".date("l").", " .date("d"). " de ". date("F"). " de " .date("Y");
salto();





