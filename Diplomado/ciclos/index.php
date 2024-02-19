<?php


// Ciclo for

for ($i = 0; $i < 10; $i++) {
    echo ($i . "<br>");
}

for ($i = 0; $i <= 20; $i++) {

    if ($i % 2 === 0) {
        echo ($i . "<br>");
    }
}

$multiplos = 0;

for ($i = 1; $i <= 1000; $i++) {

    if ($i % 7 === 0) {
        $multiplos++;
    }
}

echo ("La cantidad de mutiplos de 7 es: " . $multiplos . "<br>");


for ($i = 1; $i <= 2; $i++) {

    echo "Tabla multiplicar del " . $i   . "<br>";

    for ($x = 1; $x <= 10; $x++) {
        echo $i . " * " . $x . " = " . $i * $x . "<br>";
    }
}


//Ciclo While

$y = true;

while ($y) {
    echo "Ciclo Mientras <br>";
    $y = false;
}


$z = 1;

while ($z <= 10) {
    echo $z . "<br>";
    $z++;
}


$t = 1;

while ($t <= 25) {
    if ($t % 2 != 0) {
        echo $t . "<br>";
    }
    $t++;
}


$palabra = 'GABRIEL';
$o = 0;

while ($o < strlen($palabra)) {
    echo $palabra[$o] . "<br>";
    $o++;
}


$parada = true;
$numero = 0;

while ($parada) {

    $numero = rand(1, 50);
    echo $numero . "<br>";

    if ($numero % 10 === 0) {
        $parada = false;
    }
}


//Ciclo do while

do {
    echo "Ciclo do while <br>";
} while (false);

$g = 1;

do {
    echo $g . "<br>";
    $g++;
} while ($g < 5);



// Arrays
// Hay 3 tipos

// Indexadas
// Asociativas
// Multidimensionales


// Indexadas

// Se puedeb crear de 2 formas

$arrayUno = array("Gabriel", "Stefany", "Angel", "Samuel");
echo " Array 1<br>";
echo $arrayUno[0] . "<br>";
echo $arrayUno[1] . "<br>";
echo $arrayUno[2] . "<br>";
echo $arrayUno[3] . "<br>";


echo  "Arra y 2<br>";

$arraDos[0] = "Gabriel";
$arraDos[1] = "Stefany";
$arraDos[2] = "Angel";
$arraDos[3] = "Samuel";

echo $arraDos[0] . "<br>";
echo $arraDos[1] . "<br>";
echo $arraDos[2] . "<br>";
echo $arraDos[3] . "<br>";

echo "Tamaño del array 2: " . count($arraDos)  . "<br>";

// Recorrer el array

// Con for

echo "Recorrer array con for <br>";

for ($i = 0; $i < count($arrayUno); $i++) {
    echo $arrayUno[$i] . "<br>";
}


// Con foreach

echo "Recorrer array con foreach <br>";

foreach ($arraDos as $dato) {
    echo $dato . "<br>";
}

// Controlar la ejecucion  del foreach si el arra esta vacio

$personas = array();


if ($personas != null) {

    echo "El array tiene datos <br>";
    foreach ($personas as $persona) {
        echo $persona . "<br>";
    }
} else {
    echo "Oppss el array esta vacio <br>";
}



// Array asociativos

// Dos formas de declararlos
// Todas tienen una claver

$edades1 = array('Gabriel' => 33, 'Stefany' => 24);

$edades2['Angel'] = 8;
$edades2['Samuel'] = 1;


//imprimir

$fechasNacimiento = array(
    'Gabo' => '1990-07-27',
    'Stefy' => '1989-09-27'
);

echo "Imprimir array Asociativos <br>";

echo $fechasNacimiento['Gabo'] . "<br>";
echo $fechasNacimiento['Stefy'] . "<br>";

// Recorrer el con elforeach

foreach ($fechasNacimiento as $key => $value) {

    echo $key . " => " . $value .  "<br>";
}


// Arrays Multidimensionales


$empleados = array(
        array('Nombre' => 'Gabriel Betin',
              'Edad' => '22',
              'Genero' => 'Masculino'
            ),
        array('Nombre' => 'Stefany Coba',
        'Edad' => '19',
        'Genero' => 'Femenino')
);

// Imprimir el array directamente

echo $empleados[0]['Nombre'] . "<br>";
echo $empleados[1]['Nombre'] . "<br>";


//Funciones en array

// INsertar elemenots a un array

$ciudades = array('Medellin', 'Bogota');

echo 'Antes de insertar <br>';

foreach ($ciudades as $ciudad ) {
    echo $ciudad . '<br>';
}

array_push($ciudades,"Barranquilla","Cali");

echo 'Despues de insertar <br>';

foreach ($ciudades as $ciudad ) {
    echo $ciudad . '<br>';
}


// Extraer el utimo elemnto del array

echo 'Este es el  ultimo elemento => ' . array_pop($ciudades).'<br>';

// No mostrara el ultimo
foreach ($ciudades as $ciudad ) {
    echo $ciudad . '<br>';
}


// Buscar un elemento en un array y devolver su clave
echo array_search("Bogota", $ciudades) . '<br>';


// Ordenar un array
echo 'ordenar array <br>';
sort($ciudades);
foreach ($ciudades as $ciudad ) {
    echo $ciudad . '<br>';
}

