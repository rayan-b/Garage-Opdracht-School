<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gar-read.klant.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Read Klant</h1>
    <p>Dit zijn alle gegevens uit de tabel klanten van de database garage.</p>

    <?php 
    // ------------------------- tabel uitlezen en netjes afdrukken/uitschrijven -------------------------------------------------
    require_once "gar-connect.php";

    $sql = $conn->prepare ("SELECT klantID, klantNaam, klantAdres, klantPostcode, klantPlaats FROM klant");

    $sql->execute();

    echo "<table>";
        foreach($sql as $rij) 
        {
            echo "<tr>";
            echo "<td>" . $rij["klantID"]       . "</td>";
            echo "<td>" . $rij["klantNaam"]     . "</td>";
            echo "<td>" . $rij["klantAdres"]    . "</td>";
            echo "<td>" . $rij["klantPostcode"] . "</td>";
            echo "<td>" . $rij["klantPlaats"]   . "</td>";
            echo "</tr>";
        }

        echo "</table";
        echo "<a href='gar-menu.php'> Terug naar het menu </a>";

    ?>

</body>

</html>