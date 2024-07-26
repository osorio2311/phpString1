<?php
include "header.php";
echo "<div class='contenedor'>";

$cadena="Bienvenido a mi página web.";
$primera=substr($cadena, 0,1);
$ultima=substr($cadena,strlen($cadena)-2,1);
echo "La frase es \"$cadena\"";
echo "<br>";
echo "La primera es <strong>$primera</strong>";
echo "<br>";
echo "La última es <strong>$ultima</strong>";
echo "</div>";
include "footer.php";