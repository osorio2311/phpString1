<?php
$hoy="26 de Julio de 2024";
//buscar la posicion del primer de
$de1=strpos($hoy, "de");
//buscar la posicion del segundo de
$de2=strrpos($hoy, "de");
echo "La posición del 1 de es: $de1 y del último es $de2";
$dia=substr($hoy, 0, $de1-1);
$mes=substr($hoy, $de1+2,$de2-$de1-3);


echo "<br> El día es $dia";
echo "<br> El mes es $mes";
