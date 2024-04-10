<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Include el contenido de otra página
    //Si lo linkeamos con errores saltará error pero el resto de la página funcionará
    include 'Ejemplo01Variables.php';
    //Si incluimos más de una vez el mismo, solo lo mostrará una vez
    include_once 'Ejemplo02Operadores.php';

    //Require
    //Si lo linkeamos con errores saltará error y nada más de la página funcionará 
    require 'Ejemplo04CondicionalesIFySwitch.php';
    //Añadirlo una vez solo aunque se repita
    require_once 'Ejemplo04CondicionalesIFySwitch.php';
    ?>
</body>
</html>