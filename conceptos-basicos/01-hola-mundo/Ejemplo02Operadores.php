<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero1 = 55;
    $numero2 = 33;

    //Operadores aritméticos
    echo 'Suma: '.($numero1+$numero2).'<br>';
    echo 'Resta: '.($numero1-$numero2).'<br>';
    echo 'Multiplicación: '.($numero1*$numero2).'<br>';
    echo 'División: '.($numero1/$numero2).'<br>';
    echo 'Resto: '.($numero1%$numero2).'<br>';

    //Operadores de incremento y decremento
    echo "Incremento <br>";
    echo $numero1.'<br>';
    $numero1++;
    echo $numero1.'<br>';
    $numero1++;
    echo $numero1.'<br>';
    echo "Decremento <br>";
    echo $numero1.'<br>';
    $numero1--;
    echo $numero1.'<br>';
    $numero1--;
    echo $numero1.'<br>';

    //Operadores de asignación
    $edad = 29;
    echo $edad."<br>";
    echo ($edad+=5).'<br>';
    echo ($edad-=5).'<br>';
    echo ($edad*=5).'<br>';
    echo ($edad/=5).'<br>';
    echo ($edad%=5).'<br>';

    //Operadores de comparación
    /*
    == igual
    === identico(mismo tipo de dato)
    `!= diferente`
    <> diferente
    `!== no identico (mismo tipo de dato)`
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que
    */

    //Operadores lógicos
    /*
    && and 
    || or
    `! not`
    */

    ?>
</body>
</html>