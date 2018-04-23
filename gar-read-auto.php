<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gar-read-auto.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Read Auto</h1>
    <p>Dit zijn alle gegevens uit de tabel auto van de database garage.</p>

    <?php 
    // ------------------------- tabel uitlezen en netjes afdrukken/uitschrijven -------------------------------------------------
    require_once "gar-connect.php";

    $sql = $conn->prepare ("SELECT autoKenteken, autoMerk, autoType, autokmStand, klantID FROM auto");

    $sql->execute();

    echo "<table>";
        foreach($sql as $autoInfo) 
        {
            echo "<tr>";
            echo "<td>" . $autoInfo["autoKenteken"] . "</td>";
            echo "<td>" . $autoInfo["autoMerk"]     . "</td>";
            echo "<td>" . $autoInfo["autoType"]     . "</td>";
            echo "<td>" . $autoInfo["autokmStand"]  . "</td>";
            echo "<td>" . $autoInfo["klantID"]      . "</td>";
            echo "</tr>";
        }

        echo "</table";
        echo "<a href='gar-menu.php'> Terug naar het menu </a>";

    ?>

</body>

</html>