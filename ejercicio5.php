

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resultado__span{
            font-size: 3rem;
            color:darkblue;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="ejercicio4.php" method="post">
    <label for="nombre">Nombre:</label>
        <input type="text" name="txtNombre" id="nombre">
    <label for="apellido">Apellido</label>
        <input type="text" name="txtApellido" id="apellido">
        <input type="submit" value="Enviar">
    </form>
    <div class="resultado">
        <span class="resultado__span"><?php
if($_POST){
    $txtNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];
    echo "Hola ".$txtNombre." ".$txtApellido;
}
?></span>
    </div>

</body>
</html>