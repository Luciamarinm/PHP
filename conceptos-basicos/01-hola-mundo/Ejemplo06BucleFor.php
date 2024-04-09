<?php

    //For
    $suma = 0;
    for($i=0 ; $i <=10 ;$i++) {
        $suma += $i;
        echo $suma."<br>";
    }

    //isset es para comprobar si una variable existe
    if(isset($_GET['numero'])) {
        //Cambiar tipo de dato
        $numero = (int)$_GET['numero'];
    } else {
        $numero = 1;
    }

    echo "<h1>Tabla de multiplicar del número $numero</h1>";

    for($contador = 1 ; $contador <= 10 ; $contador++) {

        if($numero == 45) {
            echo "Rompemos el bucle";
            break;
        }
        echo "$numero x $contador = ".($numero*$contador)."<br>";
    }

?>