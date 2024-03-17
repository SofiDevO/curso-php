<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>

<body>

    <form action="ejercicio9.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA" id="valorA">
        <br>
        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB" id="valorB">
        <br>
        <input type="submit" value="Calcular">
    </form>


    <h1>
        <?php
        if ($_POST) {
            $valorA = $_POST['valorA'];
            $valorB = $_POST['valorB'];
            if ($valorA > $valorB) {
                echo "El valor de A es mayor que el valdor de B";
            } else {
                echo "El valor de B es mayor que A";
            }
        }

        ?>
    </h1>
</body>

</html>