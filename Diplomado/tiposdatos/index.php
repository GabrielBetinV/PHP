<?php


// string 

$ciudad = "Barranquilla";

var_dump($ciudad); // var_dump muestra el tipo de datos, valor y longitud

echo "<br>";


// int o integer

$numero = 8417;

var_dump($numero); 

echo "<br>";

// float y double


$numero_decimal = -8.417;

var_dump($numero_decimal); 


echo "<br>";

// boolean

$verdadero =  true;
var_dump($verdadero); 

$falso = false;
var_dump($falso); 

echo "<br>";
// Array

$ciudades = array("Barranquilla","Medellin","Bogota");

var_dump($ciudades);

echo "<br>";
// null

$x = null;
var_dump($x);

echo "<br>";



// gettype y settype

///gettype, obtiene el tipo de una variable

// https://www.php.net/manual/es/function.gettype.php



$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value),"<br>";
}


///settype, estable el tipo de una variabla

// https://www.php.net/manual/es/function.settype.php

$foo = "5bar"; // cadena
$bar = true;   // booleano

settype($foo, "integer"); // $foo es ahora 5   (entero)
settype($bar, "string");  // $bar es ahora "1" (cadena)

var_dump($foo);
var_dump($bar);

// Asignacion por adicion

$t = 78;

$t += 7;
echo   $t; 


echo "<br>";

$texto1 = "Hola";
$texto2 = "Betin";

$texto1 .= $texto2;
echo $texto1;



?>