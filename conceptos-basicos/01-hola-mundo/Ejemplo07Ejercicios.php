<?php

    //Ejercicio 1, crear 2 variables(país y continente) y mostrar el valor por pantall.
    //Poner en un comentario que tipo de dato tienen.
    echo "Ejercicio 1<br>";
    $pais = "España";
    $continente = "Europa";

    //Son String
    echo "$pais - $continente<br>";
    var_dump($pais);
    echo "<br>";
    var_dump($continente);
    echo "<br>";

    echo "Ejercicio 2<br>";
    //Ejercicio 2. Mostrar todos los números pares del 1 al 100

    for($numero = 1 ; $numero <= 100 ; $numero++) {
        if($numero % 2 == 0) {
            
            if($numero == 100) {
                echo $numero;
            } else {
                echo $numero.", ";
            }
        }
    }
    echo "<br>Ejercicio 3<br>";
    echo "Bucle while<br>";
    //Ejercicio 3. Cuadrados de los primeros 40 números naturales

    $natural = 1;
    while($natural <= 40){
        if($natural == 40) {
            echo "$natural x $natural = ".($natural*$natural);
        } else {
            echo "$natural x $natural = ".($natural*$natural).", ";
        }
        $natural++;     
    }
    echo "<br>Bucle for<br>";

    $natural = 1;
    for($natural; $natural <= 40; $natural++){
        if($natural == 40) {
            echo "$natural x $natural = ".($natural*$natural);
        } else {
            echo "$natural x $natural = ".($natural*$natural).", ";
        }  
    }

    echo "<br>Ejercicio 4<br>";
    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        echo "<h1>Calculadora</h1>";
        echo "Numero1: ".$numero1."<br>";
        echo "Numero2: ".$numero2."<br>";
        echo "Suma: ".($numero1+$numero2)."<br>";
        echo "Resta: ".($numero1-$numero2)."<br>";
        echo "Multiplicación: ".($numero1*$numero2)."<br>";
        echo "División: ".($numero1/$numero2)."<br>";
    }else {
        echo "Introduce correctamente los valores por la URL<br>";
    }
    //URL ejemplo
    //http://localhost/Proyectos/PHP/PHP/conceptos-basicos/01-hola-mundo/Ejemplo07Ejercicios.php?numero1=2&numero2=5

    //Ejercicio 5. Indicar dos números por URL y mostrar todos los números entre ellos.
    echo "<br>Ejercicio 5<br>";
    if(isset($_GET['numero3']) && isset($_GET['numero4'])) {
        $numero3 = $_GET['numero3'];
        $numero4 = $_GET['numero4'];

        
        if($numero3 < $numero4) {
            echo "Numero3: ".$numero3."<br>";
            for($i = $numero3 ; $i < $numero4 ; $i++ ) {
                echo $i."<br>";
            }
            echo "Numero4: ".$numero4."<br>";
        } else{
            echo "El primer número es igual o mayor que el segundo";
        }
        

    }else {
        echo "Introduce correctamente los valores por la URL<br>";
    }

        //Ejercicio 6. Mostrar las tablas de multiplicar del 1 al 10 en una tabla html.
        echo "<br>Ejercicio 6<br>";

        echo "<table border='1'>";

        echo "<tr>";
        for($cabecera = 1; $cabecera <= 10 ; $cabecera++) {
            echo "<td>Tabla del $cabecera</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for($i = 1; $i <= 10 ; $i++) {
            echo "<td>";
            for($j = 0 ; $j <= 10; $j++){
                echo "$i x $j = ".($i*$j)."<br>";
            }
            echo "</td>";
        }
        echo "</tr>";
        echo "</table>";


    //Ejercicio 6. Indicar dos números por URL y mostrar todos los números impares entre ellos.
    echo "<br>Ejercicio 7<br>";
    if(isset($_GET['numero3']) && isset($_GET['numero4'])) {
        $numero3 = $_GET['numero3'];
        $numero4 = $_GET['numero4'];

        
        if($numero3 < $numero4) {
            echo "Numero3: ".$numero3."<br>";
            for($i = $numero3 ; $i < $numero4 ; $i++ ) {
                if($i % 2 == 0) {
                    echo $i."<br>";
                }
            }
            echo "Numero4: ".$numero4."<br>";
        } else{
            echo "El primer número es igual o mayor que el segundo";
        }
        

    }else {
        echo "Introduce correctamente los valores por la URL<br>";
    }
?>