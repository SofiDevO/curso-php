<?php
function resultado()
{
    if ($_POST) {
        $boton = $_POST['valor'];
        switch ($boton) {
            case 1:
                echo "El usuario presiono el boton 1";
                break;
            case 2:
                echo "El usuario presiono el boton 2";
                break;
            case 3:
                echo "El usuario presiono el boton 3";
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="valor" value="1">
        <br>
        <input type="submit" name="valor" value="2">
        <br>
        <input type="submit" name="valor" value="3">
        <br>
        <h1><?php resultado()?></h1>
    </form>
</body>

</html>