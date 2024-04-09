<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $booleano = true;
    $texto = "Hola";
    $numeroEntero = 2;
    $numeroDecimal = 2.5;
    echo '<h1>'.$texto.'</h1>';
    //Para saber que tipo de variable es
    echo $booleano."  ".gettype($booleano)."<br>";
    echo $texto."  ".gettype($texto)."<br>";
    echo $numeroEntero."  ".gettype($numeroEntero)."<br>";
    echo $numeroDecimal."  ".gettype($numeroDecimal)."<br>";

    //Debuggear para ver los datos sobre lo que le pedimos
    var_dump($texto);

    //Constantes
    //Es una variable en la cual el valor no puede variar
    define('nombre', 'Lucia Marin');
    define('web', 'Instagram');
    echo '<h1>'.nombre.'</h1>';
    echo '<h1>'.web.'</h1>';

    //Constantes predefinidas
    echo __CLASS__;
    echo __FUNCTION__;


    ?>
</body>
</html>