<?php
include "header.php";

//Funciones de las cadenas de caracteres
//Conocer la longitud de una cadena
$cadena="Hola mundo, ¿Cómo estás hoy?";
echo "La cadena \"$cadena\" tiene una longitud de ".mb_strlen($cadena)." caracteres.";

//mostrar los primeros 2 caracteres de la cadena
echo "<br>Los primeros 12 caracteres '". mb_substr($cadena, 0, 12)."'";

//convertir la cadena en un array, le tengo que indicar el delimitando, en nuestro ejemplo ","
//separa hola mundo, ¿como estás hoy? en dos array uno antes de la coma y otro despues de la coma
$array=explode(",",$cadena);
echo "<br>";
echo $array[0];
echo "<br>";
echo $array[1];

//reemplazar una cadena por otra
echo "<br>";
echo substr_replace($cadena,"Este es el reemplazo de la cadena", 12);

//reemplazar todas las cadenas por otro texto. aqui cambiamos la a por una x. la que está acentuada no la cambia
echo "<br>";
echo str_replace("a","x",$cadena);

//mostrar la posición de la primera "o" en el texto
echo "<br> La primera o está en la posición ->". mb_strpos($cadena,"o");

//mostrar la posición de la última "o" en el texto
echo "<br> La primera o está en la posición ->". mb_strrpos($cadena,"o");

//ucfirst cambia la primera letra de una cadena a mayúscula
echo "<br>";
$nombre="maría perez";
echo "El nombre original es $nombre, pero con la funcion ucfirst cambia a ". ucfirst($nombre);
echo "<br>El nombre y el apellido utilizando ucfirst seria ".
    ucfirst(mb_substr($nombre,0,mb_strpos($nombre," ")))
    ." ".
    ucfirst(mb_substr($nombre,mb_strpos($nombre," ")+1));

//resulta que existe una función que pasa todas las palabras, la primera en mayúscula-> ucwords
echo "<br>Con ucword copiamos la primera letra de cada palabra en mayúsculas-> ".ucwords($nombre);

//quitar los espacios de derecha e izquierda quita el primer espacio y el último
$otraCadena=" en un lugar de la mancha ";
echo "<br>".ucwords(trim($otraCadena));
salto();
//convertir una cadena a minúsculas
echo mb_strtolower($cadena);
salto();
//convertir una cadena a mayúsculas
echo mb_strtoupper($otraCadena);

//necesitas crear una cadena encriptada MD5->WordPress -> hash
$password='Mi$sifu2024';
salto();
echo "La contraseña $password en MD5 es ". md5($password);
salto();
//tambien se puede convertir en sha1 que es otro tipo de encriptación
echo "la contraseña $password en sha1 es ". sha1($password);
salto();
echo "la longitud de sha1 es de ->" .strlen(sha1($password)) ." caracteres";

salto();
//strstr busca la primera aparición de una cadena dentro de otra cadena.
echo"Con strstr a partir del primer espacio, muestra el resto de la cadena ".strstr($otraCadena, "u");
salto();

//con strrchr busca la ultima aparición de una cadena dentro de otra cadena.
echo "Con strrchr a partir de la última u, muestra el resto de la cadena ".strrchr($otraCadena, "u");
salto();

function salto(){
    echo "<br>";
}


