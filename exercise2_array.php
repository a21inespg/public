<!DOCTYPE html>

<html>
<title>Arrays </title>

<h1>Exercises 19/09/2022</h1>

<body>
    <h2>Is there a triple?</h2>
    <?php
    $numbers = array(1, 1, 1, 2, 2, 2, 1);
    $numbers1 = array(1, 1, 2, 2, 1);

    echo "array(1, 1, 1, 2, 2, 2, 1) <br>";
    if (isTriple($numbers) == true) {
        echo "There's a triple <br> <br>";
    } else {
        echo "There's not a triple <br> <br>";
    }

    echo "array(1, 1, 2,2,1) <br>";
    if (isTriple($numbers1) == true) {
        echo "There's a triple <br> <br>";
    } else {
        echo "There's not a triple <br> <br>";
    }
    ?>

    <h2>The capital of ... is ...</h2>
    <?php
    $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
    countries($ceu);



    function isTriple(array $arrayNumbers)
    {
        # var_export($triple) para que retorne o true ou false que "contén"
        for ($x = 0 and $x < count($arrayNumbers) - 2; $x < count($arrayNumbers); $x++) {
            if ($arrayNumbers[$x] == $arrayNumbers[$x + 1] and $arrayNumbers[$x] == $arrayNumbers[$x + 2]) {
                return true;
                $x = $arrayNumbers;
            } else {
                return false;
            }
        }
    }

    function countries(array $countries)
    {
        foreach ($countries as $country => $capital) {

            echo "The capital of $country is $capital <br> <br>";
        }
    }
    ?>
</body>

</html>