<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>

<body>

    <form action="ejercicio11.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA" id="valorA">
        <br>
        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB" id="valorB">
        <br>
        <input type="submit" value="Calcular">

    </form>


    <h1>El resultado es:
        <?php
        if ($_POST) {
            $valorA = $_POST['valorA'];
            $valorB = $_POST['valorB'];

            $suma = $valorA + $valorB;
            echo $suma;
        }
        if($valorA == $valorB){
            echo "<br> El valor de A es igual que el valor de B <br>";
            if($valorA == 4){
                echo "El valor es 4 <br>";
            }
            if($valorA == 5){
                echo "El valor es 5 <br> ";
            }
        }

        ?>
    </h1>
</body>

</html>