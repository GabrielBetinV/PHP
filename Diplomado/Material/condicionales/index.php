<?php

// Sentencia IF

if (5 > 3) {
    echo "5 Es mayor que 3";
}

echo '<br>';

if (5 > 3 && "Diego" == "Diego") {

    echo "5 Es mayor que 3 y diego es el nombre correcto";
}

echo '<br>';

// Cambiar los valores para ver las repuestas delcondicionl
$p = true;
$q = true;

if ($p && $q) {

    echo "P y Q tienen un valor verdadero <br>";
}

if ($p || $q) {

    echo "P y Q tienen un valor verdadero <br>";
}

if (!$p) {

    echo "P tiene tiene un valor de true <br>";
}



// Sentencia IF - ELSE

if (25 > 6 * 5) {
    echo "Excelente, La condicional es verdadera <br>";
} else {
    echo "Oppps, La condicional es falsa <br>";
}

$pregunta1 = "Si";
$pregunta2 =  "No";


echo ("¿Eres de Colombia? <br>");
echo ("Respuesta: " . $pregunta1 . "<br>");



if ($pregunta1 == "Si") {
    echo ("¿Eres de Antioquia? <br>");
    echo ("Respuesta: " . $pregunta2 . "<br>");

    if ($pregunta2 == "Si") {
        echo ("Bienvenido¿Eres de Antioquia? <br>");
    } else {
        echo ("Visitanos <br>");
    }
} else {
    echo ("Eres Extranjero <br>");
}




// Sentencia ELSE IF

$velocidad = 120;

if ($velocidad >= 0 and $velocidad <= 30) {
    echo ("Zona Escolares <br>");
} else if ($velocidad > 30  and $velocidad <= 60) {
    echo ("Vias urbanas <br>");
} else if ($velocidad > 60  and $velocidad <= 80) {
    echo ("Vias Rurales <br>");
} else if ($velocidad > 80 and $velocidad <= 100) {
    echo ("Rutas Nacionales <br>");
} else {
    echo ("Estas infringiendo los limites de velocidad <br>");
}



// Condicionales Anidadas

$dolar = 2981;

if ($dolar >= 0) {

    if ($dolar > 0  and $dolar <= 1000) {
        echo ("El dolar tiene un valor bajo <br>");
    } else if ($dolar > 1000  and $dolar <= 2000) {
        echo ("El Dolar tiene un valor medio bajo <br>");
    } else if ($dolar > 2000  and $dolar <= 3000) {
        echo ("El dolar tiene un valor alto <br>");
    } else if ($dolar > 3000) {
        echo ("El dolar tiene un valor muy alto <br>");
    }
} else {
    echo ("El dolar no puede ser negativo <br>");
}


// Switch Case

$x = 1;

switch ($x) {
    case 0:
        echo ("x es igual a 0 <br>");
        break;
    case 1:
        echo ("x es igual a 1 <br>");
        break;
    case 2:
        echo ("x es igual a 2 <br>");
        break;
}

$diasemana = 'Sabado';
$mensaje = "Error";


switch ($diasemana) {
    case "Lunes":
    case "Martes":
    case "Miercoles":
    case "Jueves":
    case "Viernes":
        $mensaje = "Dia laboral ";
        break;
    case "Sabado":
    case "Domingo":
        $mensaje = "Dia de descanso ";
        break;
    default:
        $mensaje = " Dia invalido";
        break;
}
echo $diasemana . " es un " . $mensaje . "<br>";



// switch case anidados


$notaParcial = 5;
$notaFinal = 4;

switch ($notaFinal) {
    case 1:
    case 2:
    case 3:
        echo ("Perdiste la materia <br>");
        break;
    case 4:
    case 5:
        echo ("Ganaste la materia <br>");
        switch ($notaParcial) {
            case 1:
            case 2:
            case 3:
                echo ("Pero perdiste el parcial <br>");
                break;
            case 4:
            case 5:
                echo ("Y tambien el parcial <br>");
                break;
            default:
                echo ("Error <br>");
                break;
        }
        break;
    default:
        echo ("Error <br>");
        break;
}


?>