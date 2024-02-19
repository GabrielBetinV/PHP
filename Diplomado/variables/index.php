<?php

// Variables

// $numero = 8;
// $nombre = "Diego";
// $altura = 1.72;

// echo $nombre;

//Variablespor referencia

// LOs cambios de cualquiera de las dos variables, afectan a las dos


// $nombre = "Gabriel";
// $name = &$nombre;

// $nombre = "Antonio";

// echo $nombre;
// echo $name;


// Variables predefinidas


// $GLOBALS;
// $_SERVER;
// $_GET;
// $_POST;
// $_FILES;
// $_REQUEST;
// $_SESSION;
// $_ENV;
// $_COOKIE;


// Ambito de las variables

// Variable Local
// $x = 5;

// function prueba() {
//     echo "Variable global: " . $x; // La variable no puede acceder dentro de esta funcion
// }

// prueba();



// Vriable Global

// $edad = 41;


// function prueba() {
//     global $edad; // Se accede a la variable
//     $edad = 22;

// }

// prueba();

// echo $edad;

// Otra forma de utiliza la variable global

// $altura = 141;


// function prueba() {
//   $GLOBALS["altura"] = 172; // Se accede a la variable

// }

// prueba();

// echo $altura;



// Variables Estaticas, retienen su valor , nose reinica al ejecutarce 3 veces la funcion,.


// function prueba()
// {
//     static $x = 0;
//     echo $x;
//     $x++;
// }

// prueba();
// prueba();
// prueba();

// Variables costantes

// Hay dos tipos, Const y define

// const ESTUDIANTE = "Stven";

// echo ESTUDIANTE;



// define("PROFESOR", "Diego");

// echo PROFESOR;

// Imprimir dos variables en un echo

// forma 1

// $nombre1 = "Gabriel";
// $apellido1 = "Betin";

// echo $nombre1. " " .$apellido1;

// forma 2


// $nombre1 = "Gabriel";
// $apellido1 = "Betin";

// echo "$nombre1 $apellido1";


// PHP soporta Tipos de datos

// string, integer, float, boolean, array, object y null




?>