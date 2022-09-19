<!DOCTYPE html>

<html>
<title>Arrays </title>

<h1>Exercises 19/09/2022</h1>

<body>
    <h2>Función findString</h2>
    <?php

    // Función 1
    $word1 = "/ceo/i";
    $word2 = "buceo";
    findString($word1, $word2);

    ?>

    <h2>Función deleteBlanks</h2>
    <?php
    // Función 2
    $frase = "hola que tal estas      chamome ines";
    echo "$frase: <br>";
    deleteBlanks($frase);


    function findString($s1, $s2)
    {
        if (preg_match($s1, $s2)) {

            echo "Unha palabra contén á outra <br>";
        } else {
            echo "Ningunha palabra contén á outra <br>";
        }
    }

    function deleteBlanks($string)
    {
        echo preg_replace('/\s+/', '', $string);
    }
    ?>
</body>

</html>