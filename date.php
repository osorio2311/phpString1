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


//Establecer la configuración regional de España
setlocale(LC_TIME, 'es_ES.UTF-8');
//Mostrar la fecha actual con el nuevo formato
echo strftime("%A, %d de %B de %Y");//pendiente

salto();
//construir una fecha desde datos del usuario, por ejemplo
$dia=25;
$mes=4;
$anio=2023;
$fecha=mktime(null,null,null,$mes,$dia,$anio);
echo date("d-m-Y",$fecha);


salto();
//ejemplo calcular los días que faltan desde la fecha actual a fin de año
$hoy=date_create(date("m/d/Y"));//fecha actual
$finAnio=date_create("12/31/2024");//fecha fin de año
$diferencia=date_diff($hoy,$finAnio);
$diasQueFaltan=$diferencia->format("%a"); //muestra en numérico los días que faltan
echo "Los días que faltan hasta fin de año son $diasQueFaltan";

salto();
$inicioAnio=date_create("01/01/2024"); //primer día del año
$diferencia=date_diff($hoy,$inicioAnio);
$diasTranscurridos=$diferencia->format("%R%a días");
echo "Los días transcurridos han sido $diasTranscurridos";

//calcular fecha de nacimiento
$nacimientoJose=date_create("23-11-1973");
$diferencia=date_diff($hoy,$nacimientoJose);
$edadJose=$diferencia->format("%y años");
salto();
echo "Jose tiene $edadJose";