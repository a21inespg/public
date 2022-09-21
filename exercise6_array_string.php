<!DOCTYPE html>

<html>
<style>
    h2 {
        background-color: pink;
    }

    th {
        font-size: 1.2em;
        border-bottom: 1px solid black;
    }

    td {
        text-align: center;
        padding: 0.3em;

    }
</style>
<title>Arrays </title>

<h1>Table-Exercises 20/09/2022</h1>

<body>
    <h2>Versión miña</h2>


    <?php
    $informacion = "Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";

    // Versión miña
    $correxida = preg_replace('/;/', ',', $informacion);

    $arrayInformacion = explode(",", $correxida);

    $contador = 0;
    echo "<table> <tr>
        <th>Cidade</th>
        <th>Pais</th>
        <th>Continente</th>
        </tr> <tr>";
    for ($i = 0; $i < count($arrayInformacion); $i++) {
        echo "<td>";
        echo $arrayInformacion[$i];
        echo "</td>";
        $contador++;
        if ($contador == 3) {
            $contador = 0;
            echo  "</tr> <tr>";
        }
    }


    echo "</table>";
    $countries = explode(";", $informacion);
    ?>
    <!-- VERSIón profe -->
    <h2>Versión correxida</h2>
    <table>
        <tr>
            <th>Cidade</th>
            <th>Pais</th>
            <th>Continente</th>
        </tr>
        <?php
        foreach ($countries as $country) {
            echo "<tr>";
            $countryDetail = explode(",", $country);
            echo "<td> $countryDetail[0] </td>";
            echo "<td> $countryDetail[1] </td>";
            echo "<td> $countryDetail[2] </td>";
            echo "</tr>";
        }
        ?>


    </table>
</body>

</html>