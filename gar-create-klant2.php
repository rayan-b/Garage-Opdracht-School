<!DOCTYPE html>
<html lang="nl">

<head>
    <meta name="author" content="Rayan Biharie">
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Create Klant 2</h1>
    <p>Een klant toevoegen aan de tabel klant in de database garage.</p>

    <?php
    //klantgegevens uit het formulier halen ----------------------------
    $klantID       = NULL; //komt niet uit het formulier (autoincrement)
    $klantNaam     = $_POST["klantnaamvak"];
    $klantAdres    = $_POST["klantadresvak"];
    $klantPostcode = $_POST["klantpostcodevak"];
    $klantPlaats   = $_POST["klantplaatsvak"];

    // klantgegevens invoeren in de tabel
    require_once "gar-connect.php";

    $sql = $conn->prepare("insert into klant values (:klantID, :klantNaam, :klantAdres, :klantPostcode, :klantPlaats)");

    // manier1 (of manier 2 gebruiken) ----------------------------------
    // $sql->bindParam(":klantID",       $klantID);
    // $sql->bindParam(":klantNaam",     $klantNaam);
    // $sql->bindParam(":klantAdres",    $klantAdres);
    // $sql->bindParam(":klantPostcode", $klantPostcode);
    // $sql->bindParam(":klantPlaats",   $klantPlaats);

    // $sql->execute();

    //manier 2 -----------------------------------------------------------
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

    echo "De klant is toegevoegd. <br />";
    echo "<a href='gar-menu.php'> Terug naar het menu. </a>";
    //echo "<a href='menu.php'> Terug naar het menu. </a>";

    ?>
</body>

</html>