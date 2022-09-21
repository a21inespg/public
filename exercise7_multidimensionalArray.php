<!DOCTYPE html>

<html>
<style>
    h2 {
        background-color: pink;
    }
</style>
<title>Arrays </title>

<h1> 20/09/2022</h1>

<body>
    <h2>Multidimensional Array</h2>


    <?php
    $john = array("email" => "john@demo.com", "website" => "john.com", "age" => 22, "password" => "pass");
    $anna = array("email" => "anna@demo.com", "website" => "anna.com", "age" => 24, "password" => "pass");
    $peter = array("email" => "peter@demo.com", "website" => "peter.com", "age" => 42, "password" => "pass");
    $max = array("email" => "max@demo.com", "website" => "max.com", "age" => 33, "password" => "pass");

    $completeInfo = array("John" => $john, "Anna" => $anna, "Peter" => $peter, "Max" => $max);

    echo "<ul>";
    foreach ($completeInfo as $person => $info) {
        echo "<li> $person";
        echo "<ul>";
        foreach ($info as $data => $infoPerson) {
            echo "<li> $data : $infoPerson </li> ";
        }
        echo "</ul>";
        echo "</li>";
    }

    echo "</ul>";
    ?>




</body>

</html>