<?php
include "header.php";
echo "<div class='contenedor'>";

/**
 * En este ejercicio se te pide que averigues como se puede sumar o restar una cantidad de tiempo a una fecha y que apliques ese conocimiento para mostrar por pantalla la fecha de hoy la de ayer y la de mañana
 */
$hoy=date("d-m-Y");
echo "Hoy es $hoy";
//calcular la fecha de ayer
$ayer=date("d-m-Y",strtotime("-1 day"));
echo "<br> Ayer fue $ayer";
$manana=date("d-m-Y",strtotime("+1 day"));
echo "<br> Mañana será $manana";
$mesUnMes=date("d-m-Y",strtotime("+1 month"));
echo "<br> Dentro de un mes será $mesUnMes";
$cincoAnios=date("d-m-Y",strtotime("+5 year"));
echo "<br> Dentro de cinco años será $cincoAnios";
echo "</div>";
include "footer.php";