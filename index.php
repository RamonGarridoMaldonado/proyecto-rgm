<?php

$nombre = $_GET['nombre'];
$numero = $_GET['numero'];

for ($i=0;i<$numero;$i++) {
    echo ($i+1)." ".$nombre;
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
    <form action="index.php" method="post">
        <div>
            <label>Introduzca su nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Introduzca el numero que de veces que quiere que aparezca</label>
            <input type="text" name="numero">
            <input type="submit" value="Enviar"> 
        </div>
    </form>
</body>
</html>