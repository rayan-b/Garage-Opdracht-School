<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-klant3.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage <strong>Update</strong> klant 3</h1>
    <p>Klantgegevens wijzigen in de tabel klant van de database garage.</p>

    <?php
    // klantgegevens uit het formulier halen ------------------------------
    $klantID       = $_POST["klantidvak"];
    $klantNaam     = $_POST["klantnaamvak"];
    $klantAdres    = $_POST["klantadresvak"];
    $klantPostcode = $_POST["klantpostcodevak"];
    $klantPlaats   = $_POST["klantplaatsvak"];

    // updaten klantgegevens ----------------------------------------------
    require_once "gar-connect.php";

    $sql = $conn-> prepare("UPDATE klant SET klantNaam = :klantNaam, klantAdres = :klantAdres, klantPostcode = :klantPostcode, klantPlaats = :klantPlaats WHERE klantID = :klantID");

    $sql->execute
    (
        [
            "klantID"           => $klantID,
            "klantNaam"         => $klantNaam,
            "klantAdres"        => $klantAdres,
            "klantPostcode"     => $klantPostcode,
            "klantPlaats"       => $klantPlaats
        ]
    );

    echo "De klant is gewijzigd. <br />";
    echo "<a href='gar-menu.php'> Terug naar het menu </a>";

    ?>
    
</body>

</html>