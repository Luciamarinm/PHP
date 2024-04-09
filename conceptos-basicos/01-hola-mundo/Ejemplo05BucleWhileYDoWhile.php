<?php

    $numero = 0;
    while($numero <= 100) {
        echo $numero;
        if($numero!=100) {
            echo ", "; 
        }
        $numero++;
    }


    //Ejemplo

    //isset es para comprobar si una variable existe
    if(isset($_GET['numero'])) {
        //Cambiar tipo de dato
        $numero = (int)$_GET['numero'];
    } else {
        $numero = 1;
    }

    echo "<h1>Tabla de multiplicar del número $numero</h1>";

    $contador = 1;
    while($contador <= 10) {
        echo "$numero x $contador = ".($numero*$contador)."<br>";
        $contador++;
    }
    //Para buggear
    //var_dump($numero);


    //Do while
    $edad = 18;
    $contadorEdad = 1;

    do{
        echo"Tienes acceso al locar privado $contadorEdad <br>";
        $contadorEdad++;
    }while($edad >= 18 && $contadorEdad <= 10);
?>