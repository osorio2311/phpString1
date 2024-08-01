

<!DOCTYPE html>
<html>
<body>
<h1>Par o Impar</h1>
<?php
$numero=1;
if ($numero%2==0){
    echo"El número $numero es par";
}else{
    echo "El número $numero es impar";
}

echo "<br>";
//evaluamos si el numero es 0 tendra otro mensaje
if ($numero==0){
    echo "El numero es 0";
}elseif($numero%2==0){
    echo "El número $numero es par";
}else{
    echo "El número $numero es impar";
}

echo "<br>";
//operador ternario
$resultado=$numero%2==0?" es par ":" es impar";
echo "El número  $resultado";

echo "<br>";
//Operador ternario con 3 alternativas
$resultado=$numero==0?"es cero":($numero%2==0?"es par":"es impar");
echo "El $numero  $resultado";


echo"<br>";
//Estructura de control -> switch
//según el mes, nos mostrará los días
$mes=3;
echo "<br>Switch Case en PHP<br>";
switch($mes){
    case 1:case 3:case 5:case 7:case 8:case 10:case 12:
    echo "El mes tiene 31 días";
    break;
    case 2:
        echo "El mes tiene 28 días";
        break;
    case 4:case 6:case 9:case 11:
    echo "El mes tiene 30 días";
    break;
    default:
        echo "El mes indicado no es válido";
}
echo "<br>";

//como lo harias en un if /elseif-dato:utilizar el ||
if ($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10|| $mes==12){
    echo "El mes tiene 31 días";
}elseif($mes==4 || $mes==6 || $mes==9 || $mes==11){
    echo "El mes tiene 30 días";
}elseif($mes==2){
    echo "El mes tiene 28 días";
}else { echo "El mes indicado no es válido";
}

echo "<br><br>Estructura repetitiva o bucles-> While / do-While";
while ($mes>1 && $mes<6){
    echo "<br>Bucle While<br>";
    echo "El mes es $mes";
    $mes=8;
}

echo "<br>";
echo "<br><strong>Bucle Do-While</strong><br>";
echo "El mes es $mes";
do{
    echo "<br>Entra al bucle y se sale porque no cumple la condicion<br>";
    echo "el mes es $mes";
    $mes=8;


}while($mes>1 && $mes<6);
echo "<br>Ha salido del bucle<br>";
//do siempre se va a ejecutar y cuando while no se cumpla se saldrá


//Bucles For
echo "<br>Bucle FOR<br>";
//mostramos los numeros del 1 al 5
for ($i=1;$i<=5;$i++){
    echo "El valor de i es $i - ";
}

echo "<br><br>";
//muestra los numeros pares del 0 al 20
for($i=0;$i<=20;$i+=2){
    echo "El valor de i es $i - ";
}


//bucle for con dos variables inicializadas...
//mostrar a partir de la fecha de hoy los próximos 15 días con su fecha
echo "<br><br>Bucle FOR con fechas<br>";
$fecha=date("d-m-Y");
for ($dia=strtotime($fecha),$cons=1; $cons<=15;$dia=strtotime("+1 day",$dia),$cons++){
    echo date("d-m-Y",$dia)."<br>";
}

$dia=strtotime($fecha);
echo "<br><br><br>2 Ejecución del bucle FOR<br>";
for ($cons=1; $cons<=15;$cons++)
{
    echo date("d-m-Y",$dia)."<br>";
    $dia=strtotime("+1 day",$dia);
}


?>

</body>
</html>