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
    <h2>Working with arrays and its functions</h2>

    <h3>1/2.Números aleatorios</h3>

    <?php
    define("NUM_ELEMENTS", 20);
    $numbers = array();
    for ($i = 0; $i < NUM_ELEMENTS; $i++) {
        $numbers[$i] = rand(0, 20);
    }

    foreach ($numbers as $num) {
        echo "$num  ";
    }
    ?>

    <h3>3/4.Creación array e borrar última posicion</h3>

    <?php
    $cartoons = array("Batman", "Superman", "Krusty", "Bob", "Mel", "Barney");
    array_pop($cartoons);
    print_r($cartoons);

    ?>

    <h3>5.Posición da cadena superman</h3>
    <?php
    echo  "A posición da cadea 'Superman' é: " . array_search("Superman", $cartoons);
    ?>

    <h3>6. Engadir elementos</h3>
    <?php
    array_push($cartoons, "Carl", "Lenny", "Burns", "Lisa");
    printA($cartoons);
    ?>

    <h3>7. Ordenar elementos array (alfabeticamente)</h3>
    <?php
    sort($cartoons);
    printA($cartoons);
    ?>

    <h3>8. Borrar dende a posición 4 2 elementos</h3>
    <?php
    array_splice($cartoons, 4, 2);
    printA($cartoons);
    ?>

    <h3>9. Engadir elementos ao comezo do array</h3>
    <?php
    array_unshift($cartoons, "Manzana", "Melón", "Sandía");
    printA($cartoons);
    ?>


    <h3>10. Copiar un array do elemento 3 ao 5</h3>
    <?php
    $micopia = array_slice($cartoons, 2, 3);
    printA($micopia);
    ?>

    <h3>11. Engadir "pera" ao final do array</h3>
    <?php
    array_push($cartoons, "Pera");
    printA($cartoons);
    ?>

    <h3>12. Concatenar array "cartoons" con array "micopia"</h3>
    <?php
    $arrayConcatenado = array_merge($cartoons, $micopia);
    printA($arrayConcatenado);


    function printA($array)
    {
        foreach ($array as $element) {
            echo "$element  ";
        }
    }
    ?>





</body>

</html>