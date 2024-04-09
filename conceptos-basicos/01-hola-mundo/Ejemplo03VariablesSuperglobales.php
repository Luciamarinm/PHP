<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h1>";
    //Sacar IP
    echo $_SERVER['SERVER_ADDR'];
    echo "</h1>";

    echo "<h1>";
    //Sacar nombre de dominio
    echo $_SERVER['SERVER_NAME'];
    echo "</h1>";

    echo "<h1>";
    //Sacar software del servidor
    echo $_SERVER['SERVER_SOFTWARE'];
    echo "</h1>";

    echo "<h1>";
    //Sacar navegador de cliente
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "</h1>";

    echo "<h1>";
    //Sacar IP de cliente
    echo $_SERVER['REMOTE_ADDR'];
    echo "</h1>";

    ?>

    <h1>Formulario en PHP</h1>
    <!-- Usando GET los datos se envian por la URL y son visibles a todos-->
    <!-- action es la pagina donde nos dirige y envia la información-->
    <form method ="GET" action="Ejemplo03PruebaRecibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        <p>
            <input type="submit" value="Enviar datos">
        </p>
    </form>
    <!-- Usando GET los datos se envian por la URL y son visibles a todos-->
    <form method ="POST" action="Ejemplo03PruebaRecibir.php">
        <p>
            <label for="nombre2">Nombre</label>
            <input type="text" name="nombre2">
        </p>
        <p>
            <label for="apellidos2">Apellidos</label>
            <input type="text" name="apellidos2">
        </p>
        <p>
            <input type="submit" value="Enviar datos">
        </p>
    </form>
</body>
</html>