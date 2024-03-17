<?php
$edad = 32;
$nombre = "Sofi";
$altura = 1.4;
$programador = null;


if($_POST){
    $puesto = $_POST['puesto'];
    $programador = $puesto;
}else {
    $programador = "No es empleado de esta empresa";
}
echo "El nombre ".$nombre." La edad es ".$edad." su altura es ".$altura." El puesto es ".$programador;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        <label for="puesto">Puesto:</label>
        <input type="text" name="puesto" id="puesto">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>