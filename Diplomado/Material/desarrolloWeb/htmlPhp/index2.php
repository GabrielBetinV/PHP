<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diplomado</title>
</head>

<body>

    <br>

    <h1>Ciclos</h1>

    <?php

    for ($i = 1; $i <= 5; $i++) {

    ?>
        <h3> <?php echo $i; ?></h3>

    <?php
    }

    ?>


    <br>
    <h1>Arrays</h1>

    <?php

    $informacion = array(
        array("Gabriel", 34, "gbetin@logicred.com"),
        array("Stefany", 34, "stcoba@logicred.com"),
        array("Angel", 8, "acoba@logicred.com"),
        array("Samuel", 2, "scoba@logicred.com")
    )

    ?>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Correo</th>
        </tr>
        <tr>
            <?php
            for ($row = 0; $row <= 3; $row++) {
            ?>
        <tr>
            <?php
                for ($col = 0; $col < 3; $col++) {
            ?>
                <td> <?php echo $informacion[$row][$col]  ?></td>
            <?php
                }
            ?>
        </tr>
    <?php
            }
    ?>


    </tr>
    </table>

    <br>
    <h1>Formulario con POST</h1>

    <h2>Calculadora</h2>

    <form action="calculadora.php" method="POST">

    Numero 1 <br>
    <input type="number" name="Numero1" required id=""> <br><br>
    Operador <br>
    <select name="Operador" id="">
        <option value="" disabled>Seleccione</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select> <br><br>

    <input type="number" name="Numero2" id=""> <br><br>
    <input type="submit" value="Calcular">


    </form>

</body>

</html>