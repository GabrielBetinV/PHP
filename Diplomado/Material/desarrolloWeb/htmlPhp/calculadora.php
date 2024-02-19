<?php

$Numero1 = $_POST['Numero1'];
$Numero2 = $_POST['Numero2'];
$Operador = $_POST['Operador'];


switch ($Operador) {
    case '+':
        $Resultado = $Numero1  + $Numero2;
        break;
    case '-':
        $Resultado = $Numero1  - $Numero2;
        break;
    case '*':
        $Resultado = $Numero1  * $Numero2;
        break;
    case '/':
        $Resultado = $Numero1  / $Numero2;
        break;
    default:
        $Resultado = 'Error';
        break;
        
}
?>

<h1>El Resultado es: <?php echo $Resultado ?></h1>
<a href="index.php">Regresar a la calculador</a>