<!DOCTYPE html>
<html lang="nl">

<head>
    <meta name="author" content="Rayan Biharie">
    <meta charset="UTF-8">
    <title>gar-zoek-klant2.php</title>
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

    $sql = $conn->prepare("SELECT klantID, klantNaam, klantAdres, klantPostcode, klantPlaats FROM klant WHERE klantID = :klantID");

    $sql->execute(["klantID" => $klantID]);

    // klantgegevens laten zien --------------------------------------------------
    echo "<table>";
    foreach($sql as $rij)
    {
        echo "<tr>";
          echo "<td>" . $rij["klantID"]        . "</td>";
          echo "<td>" . $rij["klantNaam"]      . "</td>";
          echo "<td>" . $rij["klantAdres"]     . "</td>";
          echo "<td>" . $rij["klantPostcode"]  . "</td>";
          echo "<td>" . $rij["klantPlaats"]    . "</td>";
        echo "<tr>";
    }

    echo "</table><br />";
    echo "<a href='gar-menu.php'> Terug naar het menu </a>";

    ?>

</body>

</html>