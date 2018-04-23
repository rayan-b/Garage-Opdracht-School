<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-auto3.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage <strong>Update</strong> Auto 3</h1>
    <p>Autogegevens wijzigen in de tabel klant van de database garage.</p>

    <?php
    // klantgegevens uit het formulier halen ------------------------------
    $autoKenteken   = $_POST["autoKentekenvak"];
    $autoMerk       = $_POST["autoMerkvak"];
    $autoType       = $_POST["autoTypevak"];
    $autokmStand    = $_POST["autokmStandvak"];
    $klantID        = $_POST["klantidvak"];

    // updaten klantgegevens ----------------------------------------------
    require_once "gar-connect.php";

    $sql = $conn-> prepare("UPDATE auto SET autoKenteken = :autoKenteken, autoMerk = :autoMerk, autoType = :autoType, autokmStand = :autokmStand WHERE klantID = :klantID");

    $sql->execute
    (
        [
            "autoKenteken"    => $autoKenteken,
            "autoMerk"        => $autoMerk,
            "autoType"        => $autoType,
            "autokmStand"     => $autokmStand,
            "klantID"         => $klantID
        ]
    );

    echo "De auto gegevens zijn gewijzigd. <br />";
    echo "<a href='gar-menu.php'> Terug naar het menu </a>";

    ?>
    
</body>

</html>