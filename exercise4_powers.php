<?php

declare(strict_types=1); ?>
<!DOCTYPE html>

<html>
<title>Cálculo potencias </title>

<h1>Cálculo potencias </h1>

<body>
    <?php
    $a = 3;
    $b = 3;


    echo "The result  is " . power($a, $b);

    function power(int $base, int $exponent = 2)
    {
        return $power = $base ** $exponent;
    }
    ?>
</body>

</html>