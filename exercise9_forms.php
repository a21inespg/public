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
        if (isset($_REQUEST["drink"])) {
            if ($_REQUEST["units"]) {
                echo "Todo ok";
            } else {
                echo "mal";
            }
        } else {
            echo "mal";
        }
    } else {
        echo "mal";
    }




    ?>





</body>

</html>