<?php

if($_POST){
    //Informacion del formulario HTML(Metodo POST)
    $nombre = $_POST['txtNombre'];
    echo "Hola ".$nombre;
}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holi Moli</title>
</head>

<body>
    <form action="ejercicio2.php" method="post">
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="enviar">
    </form>

</body>

</html>