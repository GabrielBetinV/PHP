<?php

function saludo(){
    echo "Hola Mundo";
}

saludo();


function enviarEmail($desde,$destinatarios, $asunto, $mensaje){

    echo 'Preparando el envio del correo <br>';
    echo 'Desde: ' .$desde .'<br>';
    echo 'Asunto: ' .$asunto .'<br>';
    echo 'Mensaje: ' .$mensaje .'<br>';

    foreach ($destinatarios as $destinatario) {
        echo 'Para: ' .$destinatario .'<br>';
    }
    echo 'Mensaje enviado con exito <br>';
    echo '<br>';
}

$destinatarios = array('gabrielbetinvaldes@gmail.com','stefanycobablanco@gmail.com');

// llamado 1
enviarEmail('gbetin@litoplas.com', $destinatarios, 'Saludo', 'Prueba 1');


// llamado 2
enviarEmail('gbetin@litoplas.com', $destinatarios, 'Saludo', 'Prueba 2');


// Tipos de datos en funciones

function sumarNumeros(int $a, int $b){
    echo $a + $b . '<br>';

}

sumarNumeros(20, 45);

// hay que habilitar el tipado estricto
// Para que aunque una cadena comience con numero. no la sume

// declare(strict_types=1);


function sumarNumeros1(int $a, int $b){
    echo $a + $b . '<br>';

}

sumarNumeros1(20, 45);

// Valores predeterminados en argumentos

function correo(string $correo = 'no-repply@gmail.com'){

    echo 'Su correo es: '   .$correo  .'<br>';

}

correo('gbetin@litoplas.com');
correo(); // Este tomara el correo por default
correo('scoba@litoplas.com');

// Retorno de valores en las funciones


function multiplicacion(int $x = 1, int $y = 1){
    return $resultado = $x * $y;
}

echo '2 * 4 = ' .multiplicacion(2,4) . '<br>'; 
echo '4 * 4 = ' .multiplicacion(4,4) . '<br>'; 


echo 'Ejemplo de agenda => <br>';

function guardarTelefonos(string $numero = "000000",  array $telefonos = array()){
    array_push($telefonos, $numero);
    return $telefonos;
}


function mostrarTelefonos(array $telefonos){

    foreach ($telefonos as $telefono) {
       echo $telefono . '<br>';
    }

}



$telefonos = array();

$telefonos = guardarTelefonos('3006924281', $telefonos);
$telefonos = guardarTelefonos('3107400211', $telefonos);

mostrarTelefonos($telefonos);


function calcularIMC(float $altura = 0.0, float $peso = 0.0)
{
    return $peso / ($altura * $altura);

}

echo calcularIMC(1.62,66) . '<br>';



// Retorno estricto por tipos de datos

function sumarFloats(float $a, float $b) : float{
  return $a + $b;
}


echo sumarFloats(1.62,66) . '<br>';



function sumarFloats2(float $a, float $b) : string{

    $suma = $a + $b;
    return "El resutlado de $a + $b = $suma Calculo exacto <br>";
}


echo sumarFloats2(1.62,66) . '<br>';

// Docmentacion de funciones
// https://www.php.net/manual/es/language.functions.php

?>