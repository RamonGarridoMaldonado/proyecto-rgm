<?php

echo "Cambio hecho por Ramón Garrido Maldonado al principio del fichero";
echo "Hola Paco";

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

echo "Hola ".$nombre." ".$apellidos;

// Cambio por Ramón Garrido Maldonado (Dueño y señor de este proyecto)
for ($i;$i<10;$i++) {
    echo $i;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <form action="index2.php" method="post">
        <div>
            <label>Introduzca su nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Introduzca el numero que de veces que quiere que aparezca</label>
            <input type="text" name="apellidos">
            <input type="submit" value="Enviar"> 
        </div>
        <br/>
        <label>Esto es una prueba</label>
    </form>
</body>
</html>