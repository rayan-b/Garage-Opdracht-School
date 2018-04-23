<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-auto2.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage <strong>Update</strong> Auto 2</h1>
    <p>Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel <b>auto</b> van de database <b>garage</b>.</p>

    <?php
    // klantID uit het formulier halen -------------------------------------------------
    $klantID = $_POST["klantidvak"];

    // klantgegevens uiot de tabel halen -----------------------------------------------
    require_once "gar-connect.php";

    $klanten = $conn->prepare ("SELECT autoKenteken, autoType, autoType, autokmStand, klantID FROM auto WHERE klantID = :klantID");

    $klanten->execute(["klantID" => $klantID]);

    // klantgegevens in een nieuw formulier laten zien ---------------------------------
    echo "<form action='gar-update-auto3.php' method='post'>";
        foreach($klanten as $klant) 
        {
            // klantID mag niet gewijzigd worden
            echo "klantID:" . $klant["klantID"];
            echo "<input type='hidden' name='klantidvak'";
            echo "value=' " . $klant["klantID"] . " '> <br /> ";

            echo "autoKenteken: <input type='text' ";
            echo "name  = 'autoKentekenvak' ";
            echo "value = '" .$klant["autoKenteken"]. "' ";
            echo "> <br />";

            echo "autoMerk: <input type='text' ";
            echo "name  = 'autoMerkvak' ";
            echo "value = '" .$klant["autoMerk"]. "' ";
            echo "> <br />";

            echo "autoType: <input type='text' ";
            echo "name  = 'autoTypevak' ";
            echo "value = '" .$klant["autoType"]. "' ";
            echo "> <br />";

            echo "autokmStand: <input type='text' ";
            echo "name  = 'autokmStandvak' ";
            echo "value = '" .$klant["autokmStand"]. "' ";
            echo "> <br />";
        }

        echo "<input type='submit' value='Verzenden'>";
    echo "</form>";

    // er moet eigenlijk nog gecontroleerd worden op bestaand klantID //

    ?>

</body>

</html>