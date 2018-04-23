<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rayan Biharie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-auto3.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Delete Auto 3</h1>
    <p>Op klantID gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd worden.</p>

    <?php
    // gegevens uit het formulier halen ---------------------------------------------------------------------
    $klantID = $_POST{"klantidvak"};
    $verwijderen = $_POST ["verwijdervak"];

    // klantgegevens verwijderen ----------------------------------------------------------------------------
    if($verwijderen)
    {
        require_once "gar-connect.php";

        $sql = $conn->prepare("DELETE FROM auto WHERE klantID = :klantID");

        echo "De gegevens zijn verwijderd. <br />";
    }
    else
    {
        echo "De gegevens zijn <strong>niet</strong> verwijderd. <br />";
    }

    echo "<a href='gar-menu.php'>Terug naar het menu.</a>";
    ?>

</body>

</html>