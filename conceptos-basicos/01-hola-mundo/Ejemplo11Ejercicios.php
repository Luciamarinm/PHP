<?php

/*Ejercicio 1
Un array con 8 números:
-Mostrarlo
-Ordenarlo y mostrarlo
-Mostrar su longitud
-Buscar un elemento 
*/
echo "Ejercicio 1<br>";
echo "Crearlo y mostrarlo<br>";
$numeros = array(8,2,4,9,6,7,3,1);

for($i = 0 ; $i < count($numeros) ; $i++) {
    echo $numeros[$i]." ";
}
echo "<br>Ordenarlo y mostrarlo<br>";
sort($numeros);
for($i = 0 ; $i < count($numeros) ; $i++) {
    echo $numeros[$i]." ";
}
echo "<br>Mostrar longitud<br>";
echo count($numeros);
echo "<br>Buscar un elemento<br>";
echo array_search('1', $numeros);
echo "<br>";

/*Ejercicio 2
Crear un array:
-Añadir elementos a un array mientras que su longitud sea menor a 120
-Mostrarlo
*/
echo "Ejercicio 2<br>";
$ejercicio2 = array();
for($i = 0; $i < 120 ; $i++) {
    array_push($ejercicio2, $i." ");
}
for($i = 0; $i < 120 ; $i++) {
    echo $ejercicio2[$i];
}

/*Ejercicio 3
Comprobar si una variable está vacía
-Si lo está, rellenada con texto en mayúsculas
-Si no está vacía mostrarlo en minúsculas
*/
echo "<br>Ejercicio 3<br>";
$texto = "No está vacía";
if(empty($texto)) {
    $texto = "esta vacia";
    echo strtoupper($texto)."<br>";
} else {
    echo strtolower($texto)."<br>";
}
/*Ejercicio 4
Crear 4 variables
-Array
-String
-Int
-Booleana
Mostrar un mensaje según el tipo de variable que sea
*/
echo "<br>Ejercicio 4<br>";
$texto = "No está vacía";
if(empty($texto)) {
    $texto = "esta vacia";
    echo strtoupper($texto)."<br>";
} else {
    echo strtolower($texto)."<br>";
}

$matriz = array("array", 11);
$cadena = "Cadena";
$numero = 1;
$verdadero = true;

if(is_array($matriz)) {
    echo "Es un array<br>";
}
if(is_string($cadena)) {
    echo "Es un String<br>";
}
if(is_integer($numero)) {
    echo "Es un integer<br>";
}
if(is_bool($verdadero)) {
    echo "Es un booleano<br>";
}

/*Ejercicio 5
Crear un array con el contenido de la tabla:
ACCION  AVENTURA    DEPORTES
GTA     ASSASINS    FIFA
COD     CRASH       MOTO GP
PUGB    PRINCE      PES
*/
echo "<br>Ejercicio 5<br>";
$tabla = array(
    "ACCION" => array("GTA", "COD", "PUGB"),
    "AVENTURA" => array("ASSASINS", "CRASH", "PRINCE"),
    "DEPORTES" => array("FIFA", "MOTO GP", "PES")
);
//Señala las categorías del array asociativo
$categorias = array_keys($tabla);
var_dump($categorias);

?>
<table border="1">
    <tr>
        <?php //Cuando usamos php no usamos llaves, si no : y endforeach
        foreach($categorias as $categoria) : ?> 
        <th><?= $categoria ?></th>
        <?php endforeach; ?>
    </tr>
    <?php for($i = 0 ; $i < count($tabla); $i++) {?>
    <tr> 
        <td><?= $tabla['ACCION'][$i] ?></td>
        <td><?= $tabla['AVENTURA'][$i] ?></td>
        <td><?= $tabla['DEPORTES'][$i] ?></td>
    </tr>
    <?php } ?>
</table>
