<?php

$color = "rojo";
if($color == "rojo") {
    echo "El color es rojo<br>";
} else {
    echo "El color no es rojo<br>";
}


$year = 2019;
if($year > 2021) {
    echo "Es un año anterior a 2021<br>";
} else {
    echo "Es un año posterior a 2021<br>";
}

if($year > 2021) {
    echo "Es un año anterior a 2021<br>";
}elseif($year == 2021) {
    echo "Es el mismo año<br>";
} 
else {
    echo "Es un año posterior a 2021<br>";
}

//Ejemplo

$edad = 18;
$edad2 = 65;
$edadEjemplo = 17;

if($edadEjemplo >= $edad && $edadEjemplo <= $edad2) {
    echo "Está edad de trabajar<br>";
} else {
    echo "No puede trabajar<br>";
}

//Switch

$dia = "Martes";

switch($dia) {
    case "Lunes":
        echo "Hoy es lunes<br>";
        break;
    case "Martes":
        echo "Hoy es martes<br>";
        break;
    case "Miercoles":
        echo "Hoy es miercoles<br>";
        break;
    case "Jueves":
        echo "Hoy es jueves<br>";
        break; 
    case "Viernes":
        echo "Hoy es viernes<br>";
        break;
    default:
        echo "Es fin de semana<br>";
        break;
}

//Go to
//Se salta lo que hay en medio
goto marca;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

marca: 
echo "Me he saltado 4 echos";
?>