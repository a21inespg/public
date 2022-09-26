<!DOCTYPE html>

<html>
<style>
    h2 {
        background-color: pink;
    }
</style>
<title>Arrays </title>

<h1> 22/09/2022</h1>

<body>
    <h2>First form</h2>
    <form method="get">
        <input type="radio" name="drink" value="coke">Coke - 1 <br>
        <input type="radio" name="drink" value="pepsi">Pepsi - 0,80 <br>
        <input type="radio" name="drink" value="orange">Orange - 0.90 <br>
        <input type="radio" name="drink" value="apple juice">Apple Juice - 1.10 <br>

        Número de unidades: <input type="number" name="units" value="" required><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php

    if (isset($_REQUEST["submit"])) {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (empty($_REQUEST["drink"]) and empty($_REQUEST["units"])) {
                $drinkUnitsError = "You have to select a drink and a nnumber of units";
                echo $drinkUnitsError;
            } else if (empty($_REQUEST["units"])) {
                $unitsError = "There is no number";
                echo $unitsError;
            } else if (empty($_REQUEST["drink"])) {
                $drinkError = "You have to select a drink";
                echo $drinkError;
            } else {
                // pódese utilizar is_numeric($number) para comprobar que non sexa un caracter
                $number = limpar($_REQUEST["units"]);
                $drink = limpar($_REQUEST["drink"]);
                $price = 0;
                if ($drink == "coke") {
                    $price = $number * 1;
                } else if ($drink == "pepsi") {
                    $price = $number * 0.80;
                } else if ($drink == "orange") {
                    $price = $number * 0.90;
                } else {
                    $price = $number * 1.10;
                }
                echo "You have asked for $number bottles of $drink. You have to pay $price euros";
            }
        }
    }


    function limpar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }



    ?>





</body>

</html>