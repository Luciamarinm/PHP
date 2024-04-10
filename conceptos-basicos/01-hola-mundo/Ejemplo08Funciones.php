<?php

    //Funciones
    /*
    Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
    que puede reutilizarse solamente invocando a la función tantas veces como necesitemos
    */ 

    //Ejemplo 1

    function muestraNombres () {
        echo "Victor Robles<br>";
        echo "Lucía Marín<br>";
        echo "Lucía Marín<hr/>";
    }

    //Invocar función
    muestraNombres();
    muestraNombres();

    //Ejemplo 2 Funciones con parámetros obligatorios
    function tabla($numero) {
        var_dump($numero);
        echo "<br>";
        echo "Tabla de multiplicar del número $numero<br>";
        for($i = 0 ; $i <= 10 ; $i++){
            echo "$numero x $i = ".($numero*$i)."<br>";
        }
    }
    if(isset($_GET['numero'])) {
        tabla($_GET['numero']);
    } else {
        echo "Introduce un número";
    }
    //http://localhost/Proyectos/PHP/PHP/conceptos-basicos/01-hola-mundo/Ejemplo08Funciones.php?numero=2
    
    //Ejemplo 3 
    echo "Calculadora<br>";
    //Es obligatorio enviarle la cantidad de parámetros que especificamos
    function calculadora($numero1, $numero2) {
        echo "Suma: $numero1 + $numero2 = ".($numero1+$numero2)."<br>";
        echo "Resta: $numero1 - $numero2 = ".($numero1-$numero2)."<br>";
        echo "Multiplicación: $numero1 * $numero2 = ".($numero1*$numero2)."<br>";
        echo "División: $numero1 / $numero2 = ".($numero1/$numero2)."<br>";
    }

    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
        //Enviamos los parámetros que pide la función
        calculadora($_GET['numero1'], $_GET['numero2']);
    } else {
        echo "Introduce los números";
    }
   // http://localhost/Proyectos/PHP/PHP/conceptos-basicos/01-hola-mundo/Ejemplo08Funciones.php?numero=2&numero1=3&numero2=5

    //Ejemplo 4 funciones con parámetros opcionales
    //Declaramos el valor del parámetro opcional dentro de la función
    echo "<hr/>Función con parámetros opcionales<br>";
    function opcional($numero1, $numero2, $negrita = false) {
        if($negrita != false) {
            echo "<h1>";
        }
        echo "Suma: $numero1 + $numero2 = ".($numero1+$numero2)."<br>";
        if($negrita != false) {
            echo "</h1>";
        }
    }

    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
        //Enviamos los parámetros que pide la función
        opcional($_GET['numero1'], $_GET['numero2']);
        opcional($_GET['numero1'], $_GET['numero2'], true);
    } else {
        echo "Introduce los números";
    }
   // http://localhost/Proyectos/PHP/PHP/conceptos-basicos/01-hola-mundo/Ejemplo08Funciones.php?numero=2&numero1=3&numero2=5

    //Ejemplo 5 Return

    function devuelveNombre($nombre) {
        return "El nombre es $nombre";
        
    }

    if(isset($_GET['nombre'])) {
        $nombre = devuelveNombre($_GET['nombre']);
        echo $nombre;
    } else {
        echo "Introduce un nombre";
    }
   // http://localhost/Proyectos/PHP/PHP/conceptos-basicos/01-hola-mundo/Ejemplo08Funciones.php?numero=2&numero1=3&numero2=5&nombre=Lucia
    
   //Variables 
   /*
   -Variables Locales: Son las que se definen dentro de una función y no pueden ser usadas fuera
   de la función, solo están disponibles dentro. A no ser que hagamos un return.
   -Variables globales: Son las que se declaran fuera de una función y están disponibles dentro
   y fuera de las funciones.
   */

   //Variable global
    $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres<br>";
    echo $frase;

    function frase() {
        //Llamamos a la variable para que sea global y pueda usarse dentro de la función
        global $frase;
        echo "<h1>$frase</h1>";
        $year = 2024;
        echo "$year<br>";
        //Con el return se enviará la variable
        return $year;
    }
    
    //Imprimirá $frase tal y como está en la función, $year por lo mismo, y al usar return volverá
    //a imprimir $year
    echo frase();
    echo "<br>";
    //No funcionará la variable $year fuera de la función
    //echo $year;

    //Funciones variables
    //Cuando el valor de una variable se usa para llamar a una función

    function buenosDias() {
        return "Buenos días<br>";
    }
    function buenasTardes() {
        return "Buenas tardes<br>";
    }
    function buenasNoches() {
        return "Buenas noches<br>";
    }

    //Generamos una variable con valor igual al nombre de una función
    $horario = "buenasNoches";
    //Al usarlo como llamar una función busca una función con el nombre del valor de la variable
    echo $horario();

    //Funciones predefinidas
    //Para debuggear, dice tipo de variable y valor
 
    var_dump($horario);
    echo "<br>";
    echo gettype($horario);

    //Fecha
    echo "<br>";
    echo "Fecha ".date('d-m-y');
    echo "<br>";
    echo time();
    echo "<br>";

    //Matematicas
    echo "Raiz cuadrada de: 9 = ".sqrt(9);
    echo "<br>";
    echo "Random entre 10 y 40 = ".rand(10,40);
    echo "<br>";
    echo "Pi = ".pi();
    echo "<br>";
    echo "Redondear : 7.895 = ".round(7.895);
    echo "<br>";
    //Is algo
    if(is_string($horario)) {
        echo "Es un String<br>";
    }else {
        echo "No es un String<br>";
    }

    $frase = "   contenido   ";
    //Quita espacios en blanco al inicio y al final
    echo trim($frase);

    //Eliminar variables de array
    $year = 2024;
    unset($year);
    //echo $year;

    //Comprobar si una variable no tiene valor
    if(empty($horario)) {
        echo "No está vacía<br>";
    } else {
        echo "Está vacía<br>";
    }

    //Contar carácteres de un String
    $cadena = "12345";
    echo strlen($cadena)."<br>";

    //Encontrar carácter
    $frase2 = "La vida es bella";
    echo strpos($frase2, "i")."<br>";

    //Reemplazar palabra en un String
    $frase2 = str_replace("vida", "moto", $frase2)."<br>";
        echo $frase2;

    //Cambiar a mayúsculas o minúsculas
    echo strtolower($frase2)."<br>";
    echo strtoupper($frase2)."<br>";
    



?>