<!--include-> la sentencia include incluya y evalúa el archivo especificado-->
<?php
include "header.php";
echo "<div class='contenedor'>";


/**
 * Las comillas dobles muestran variables, cadenas y caracteres especiales
 * La función nl2br(tuCadena) permite el salto de linea en html
 */

//1 ejemplo, echo sin nl2br
echo "Ejemplo del salto de linea con el codigo de escape \\n no se ejecuta sin el nl2br \n";
echo "Aqui otro texto<br>";

//2 ejemplo, echo con nl2br
echo nl2br("Este es un ejemplo donde si hace el salto de linea con \\n \n Aqui otro texto");

//3 ejemplo, comillas simples dentro de comillas simples
$variable="Contenido";
echo nl2br( '<br>La \'$variable puede tener un texto  \' que no muestra, sino su nombre');

//4 ejemplo, comillas dobles mostrando el valor de la varialbe
echo nl2br( "\n El '$variable puede tener un texto ' que si muestra, utilizando comillas \"");

//5 ejemplo, el codigo html se muestra tanto en comillas " como comillas '
echo '<br>El párrafo tiene <strong>tiene muchas líneas</strong> en el código HTML';

/** Resumen
 * código de escape
 * \n -> salto de línea
 * \" -> muestra la comilla dentro de un string comenzado con comillas "
 * \' -> idem al anterior
 * \\ -> muestra la barra \
 */
echo "</div>";
include "footer.php";