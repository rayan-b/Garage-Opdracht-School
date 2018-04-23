<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rayan Biharie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-klant2.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Delete Klant 2</h1>
    <p>Op klantID gegevens zoeken uit de tabel klant(en) van de database garage zodat ze verwijdered kunnen worden</p>

    <?php
    // klantID uit het formulier halen ---------------------------------
    $klantID = $_POST["klantidvak"];

     //klantgegevens uit de tabel halen -----------------------------------
     require_once "gar-connect.php";

     $klanten = $conn->prepare ("SELECT klantID, klantNaam, klantAdres, klantPostcode, klantPlaats FROM klant WHERE klantID = :klantID");

     $klanten->execute(["klantID" => $klantID]);

      // klantgegevens laten zien ---------------------------------
      echo "<table>";
      foreach($klanten as $klant)
      {
          echo "<tr>";
          echo "<td>" . $klant ["klantID"]       . " </td>";
          echo "<td>" . $klant ["klantNaam"]     . " </td>";
          echo "<td>" . $klant ["klantAdres"]    . " </td>";
          echo "<td>" . $klant ["klantPostcode"] . " </td>";
          echo "<td>" . $klant ["klantPlaats"]   . " </td>";
          echo "</tr>";
      }
      echo "</table><br/>";

      echo "<form action='gar-delete-klant3.php' method='post'>";
        //klantID mag niet meer gewijzigd worden
        echo "<input type='hidden' name='klantidvak' value=$klantID>";
        //waarde 0 doorgegeven als er niet gechect wordt
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "Verwijder deze klant. <br />";
        echo "<input type='submit' value='Verzenden'>";
      echo "</form>";

    ?>

</body>

</html>