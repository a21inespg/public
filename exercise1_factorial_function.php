<?php

declare(strict_types=1); ?>
<!DOCTYPE html>

<html>
<title>Cálculo dun factorial </title>

<h1>Cálculo dun factorial </h1>

<body>
    <?php


    define("NUM", 4);

    if (calculoFactorial(NUM) > 0) {
        echo "The factorial of " . NUM . " is " . calculoFactorial(NUM);
    } else {
        echo "Incorrect numberrr";
    }

    function calculoFactorial(int $num)
    {
        // as comprobacions dentro da función
        if ($num > 0) {
            $factorial = 1;
            for ($x = 1; $x <= $num; $x++) {
                $factorial = $factorial * $x;
            }

            return $factorial;
        } else {
            return -1;
        }
    }
    ?>
</body>

</html>