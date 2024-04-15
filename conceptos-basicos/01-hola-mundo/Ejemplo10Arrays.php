<?php

    //Arrays
    //Es un conjunto de datos/valores bajo un mismo nombre

    $pelicula = "Batman";
    $peliculas = array('Batman', 'Wonderwoman', 'Superman');

    var_dump($peliculas);
    echo "<br>";
    $cantantes = array('Taylor Swift', 'Britney Spears', 'Madonna');
    echo $cantantes[0]."<br>";

    //Para ver cuantos elementos tiene un array usar count
    for($i = 0 ; $i < count($cantantes) ; $i++) {
        echo $cantantes[$i]." ";
    }
    echo "<br>";
    //Con foreach
    foreach( $cantantes as $cantante) {
        echo "$cantante ";
    }
    echo "<br>";
    //Array asociativo
    $personas = array (
        'nombre' => 'Lucía',
        'apellidos' => 'Marín',
        'nacimiento' => 1994
    );

    var_dump($personas);
    echo "<br>";
 
    //Arrays multidimensionales
    $contactos = array(
        array(
            'nombre' => 'Jose',
            'apellidos' => 'Salmerón'
        ),
        array(
            'nombre' => 'Paco',
            'apellidos' => 'Martínez'
        ),
        array(
            'nombre' => 'Sofía',
            'apellidos' => 'Fernandez'
        )
    );
    var_dump($contactos);
    echo "<br>";
    //Acceder a una parte del array
    echo $contactos[1]['nombre'];
    echo "<br>";

    foreach($contactos as $contacto) {
        var_dump($contacto['nombre']);
    }
    echo "<br>";

    //Funciones en arrays
    //Ordena
    echo "<br>Ordenarlo y mostrarlo<br>";
    asort($peliculas);
    var_dump($peliculas);
    echo "<br>";
    $numeros = [1,2,5,3,9,4];
    echo "<br>Ordenarlo y mostrarlo<br>";
    var_dump($numeros);
    echo "<br>";
    //Ordena
    sort($numeros);
    asort($numeros);
    var_dump($numeros);
    echo "<br>";
    for($i = 0 ; $i < count($numeros) ; $i++) {
        echo $numeros[$i]." ";
    }
    echo "<br>";
    //Añade elementos
    array_push($peliculas, "Liga de la justicia");
    var_dump($peliculas);
    echo "<br>";
    //Borra el ultimo
    array_pop($peliculas);
    var_dump($peliculas);
    echo "<br>";
    //Borra el que le indiques
    unset($peliculas[1]);
    var_dump($peliculas);
    echo "<br>";

    //Aleatorio
    //Muestra el índice de un array aleatorio
    echo array_rand($peliculas);
    echo "<br>";

    //Dar la vuelta al array
    var_dump(array_reverse($peliculas));
    echo "<br>";
    //Buscar dentro de un array
    echo array_search('Superman', $peliculas);
    echo "<br>";
    var_dump(array_search('Aquaman', $peliculas));
    echo "<br>";

?>