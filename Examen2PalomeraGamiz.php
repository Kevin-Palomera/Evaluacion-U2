<?php
/* CBTIS 89
Programa que almacena los precios en un arreglo con IVA, descuento y al final imprime el contenido de los arreglos  
Kevin Anthony Palomera Gamiz
3ºA Programación Matutino
*/
$arrayPrecios = array (500,400,200,700,100);
$arrayIVA=array();
$arraySubtotal=array();
$arrayDescuentos=array();
$arrayTotal=array();

$longitud=count($arrayPrecios);
echo "ARREGO PRECIOS", "<br>", "<br";
for($i=0; $i <$longitud; $i++) {
	echo $arrayPrecios[$i];
	echo "<br>";
}

echo "<br>";
$longitud=count($arrayIVA);
 echo "ARREGLO IVA", "<br>", "<br>";
 for($i=0; $i<$longitud; $i++) {
 	$arrayIVA=$arrayPrecios[$i]*0.16;

 	echo $arrayIVA;
 	echo "<br>";
 }

echo "<br>";
$longitud=count($arraySubtotal);
echo "ARREGLO SUBTOTAL", "<br>", "<br>";
for ($i=0; $i <$longitud; $i++) {
	$arraySubtotal=$arrayPrecios[$i]+$arrayIVA;
	echo $arraySubtotal;
	echo "<br>";
}