<!DOCTYPE html>

<html>
<style>
    h2 {
        background-color: pink;
    }
</style>
<title>Arrays </title>

<h1> 26/09/2022</h1>

<body>
    <h2>Second form</h2>
    <h3>Novell Services Login</h3>


    <?php
    print_r($_REQUEST);
    if (isset($_REQUEST["submit"])) {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (empty($_REQUEST["sign-in"]) and empty($_REQUEST["role"])) {
                echo "Tes que seleccionar un rol e unha forma de inicio de sesión";
            } else if (empty($_REQUEST["sign-in"])) {
                echo "Tes que seleccionar unha forma de inicio de sesión";
            } else if (empty($_REQUEST["role"])) {
                echo "Tes que seleccionar un rol";
            } else {
                $name = limpar($_REQUEST["username"]);
                $pass = limpar($_REQUEST["pass"]);
                $city = limpar($_REQUEST["city"]);

                formulario($name, $pass, $city);
            }
        }
    }

    function formulario($name, $pass, $city)
    { ?>
        <form method="get">
            Username <input type="text" name="username" value="<?php echo $name; ?>"><br>
            Password <input type="password" name="pass" value="<?php echo $pass; ?>"><br>
            City of emplyment <input type="text" name="city" value="<?php echo $city; ?>"><br>
            Web server: <br>
            <select>
                <option>Option1 </option>
                <option>Option2 </option>
                <option>Option3 </option>
            </select> <br> <br>

            Please specify your role: <br>
            <input type="radio" name="role" value="Admin">Admin <br>
            <input type="radio" name="role" value="Engineer">Engineer<br>
            <input type="radio" name="role" value="orange">Manager<br>
            <input type="radio" name="role" value="apple juice">Guest <br><br>

            Single sign-on to the following: <br>
            <input type="checkbox" name="sign-in" value="Mail">Mail <br>
            <input type="checkbox" name="sign-in" value="Payroll">Payroll <br>
            <input type="checkbox" name="sign-in" value="Self-Service">Self-Service <br> <br>

            <input type="submit" name="submit" value="Login">
            <input type="reset" name="submit" value="Reset">
        </form>

    <?php
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