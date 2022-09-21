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
    <h2>Working with arrays and its functions</h2>

    <h3>1. Nummeros aleatorios</h2>

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

        <h3>2.Debuxos</h2>

            <?php
            $cartoons = array("Batman", "Superman", "Krusty", "Bob", "Mel", "Barney");
            array_pop($cartoons);

            foreach ($cartoons as $name) {
                echo $name;
            }
            ?>
            <h3>3.Posición da cadena superman</h2>

                <?php
                echo  "A posición da cadea 'Superman' é: " . array_search("Superman", $cartoons);
                ?>
                <h3>4. Engadir elementos</h2>

                    <?php
                     array_push($cartons, "")
                    ?>




</body>

</html>