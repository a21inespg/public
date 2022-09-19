<!DOCTYPE html>

<html>
<title>Cálculo dun factorial </title>

<h1>Cálculo dun factorial </h1>

<body>
    <?php
    $num = 5;

    // define(NUM, 5); aqui defeniriamos unha constante, non se usa dolar para accedelas

    $factorial = 1;

    for ($x = 1; $x <= $num; $x++) {
        $factorial = $factorial * $x;
    }

    echo "The factorial of $num is $factorial";
    ?>
</body>

</html>