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
        <input type="radio" name="drink" value="apple_juice">Apple Juice - 1.10 <br>

        Número de unidades: <input type="number" name="units" value=""><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    print_r($_REQUEST);
    if (isset($_REQUEST["submit"])) {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (empty($_REQUEST["drink"])) {
                $drinkError = "You have to select a drink";
            } else {
                $drink = limpar($_REQUEST["drink"]);
                echo "bebida ok";
            }

            if (empty($_REQUEST["units"])) {
                $unitsError = "There is no number";
            } else {
                $units = limpar($_REQUEST["units"]);
                echo "units ok";
            }


            $unit = limpar($_REQUEST["units"]);
        }
    } else {
        echo "mal";
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