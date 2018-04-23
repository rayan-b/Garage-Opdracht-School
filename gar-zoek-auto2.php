<!DOCTYPE html>
<html lang="nl">

<head>
    <meta name="author" content="Rayan Biharie">
    <meta charset="UTF-8">
    <title>gar-zoek-auto2.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage zoekt op klantID 2</h1>
    <p>Op klantID gegevens zoeken uit de tabel klanten van de database garage.</p>

    <?php
    // klantID uit het formulier halen -------------------------------------------
    $klantID = $_POST["klantidvak"];

    // klantgegevens uit de tabel halen ------------------------------------------
    require_once "gar-connect.php";

    $sql = $conn->prepare("SELECT autoKenteken, autoMerk, autoType, autokmStand, klantID FROM auto WHERE klantID = :klantID");

    $sql->execute(["klantID" => $klantID]);

    // klantgegevens laten zien --------------------------------------------------
    echo "<table>";
    foreach($sql as $rij)
    {
        echo "<tr>";
          echo "<td>" . $rij["autoKenteken"]  . "</td>";
          echo "<td>" . $rij["autoMerk"]      . "</td>";
          echo "<td>" . $rij["autoType"]      . "</td>";
          echo "<td>" . $rij["autokmStand"]   . "</td>";
          echo "<td>" . $rij["klantID"]       . "</td>";
        echo "<tr>";
    }

    echo "</table><br />";
    echo "<a href='gar-menu.php'> Terug naar het menu </a>";

    ?>

</body>

</html>