<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-klant2.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage <strong>Update</strong> klant 2</h1>
    <p>Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel <b>klant</b> van de database <b>garage</b>.</p>

    <?php
    // klantID uit het formulier halen -------------------------------------------------
    $klantID = $_POST["klantidvak"];

    // klantgegevens uiot de tabel halen -----------------------------------------------
    require_once "gar-connect.php";

    $klanten = $conn->prepare ("SELECT klantID, klantNaam, klantAdres, klantPostcode, klantPlaats FROM klant WHERE klantID = :klantID");

    $klanten->execute(["klantID" => $klantID]);

    // klantgegevens in een nieuw formulier laten zien ---------------------------------
    echo "<form action='gar-update-klant3.php' method='post'>";
        foreach($klanten as $klant) 
        {
            // klantID mag niet gewijzigd worden
            echo "klantID:" . $klant["klantID"];
            echo "<input type='hidden' name='klantidvak'";
            echo "value=' " . $klant["klantID"] . " '> <br /> ";

            echo "klantNaam: <input type='text' ";
            echo "name  = 'klantnaamvak' ";
            echo "value = '" .$klant["klantNaam"]. "' ";
            echo "> <br />";

            echo "klantAdres: <input type='text' ";
            echo "name  = 'klantadresvak' ";
            echo "value = '" .$klant["klantAdres"]. "' ";
            echo "> <br />";

            echo "klantPostcode: <input type='text' ";
            echo "name  = 'klantpostcodevak' ";
            echo "value = '" .$klant["klantPostcode"]. "' ";
            echo "> <br />";

            echo "klantPlaats: <input type='text' ";
            echo "name  = 'klantplaatsvak' ";
            echo "value = '" .$klant["klantPlaats"]. "' ";
            echo "> <br />";
        }

        echo "<input type='submit' value='Verzenden'>";
    echo "</form>";

    // er moet eigenlijk nog gecontroleerd worden op bestaand klantID //

    ?>

</body>

</html>