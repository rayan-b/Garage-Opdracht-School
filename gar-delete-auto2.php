<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rayan Biharie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-auto2.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Delete Auto 2</h1>
    <p>Op klantID gegevens zoeken uit de tabel auto('s') van de database garage zodat ze verwijdered kunnen worden</p>

    <?php
    // klantid uit het formulier halen ---------------------------------
    $klantid = $_POST["klantidvak"];

     //autogegevens uit de tabel halen -----------------------------------
     require_once "gar-connect.php";

     $klanten = $conn->prepare ("SELECT autoKenteken, autoMerk, autoType, autokmStand, klantID FROM klant WHERE klantID = :klantID");

     $klanten->execute(["klantID" => $klantID]);

      // klantgegevens laten zien ---------------------------------
      echo "<table>";
      foreach($klanten as $auto)
      {
          echo "<tr>";
          echo "<td>" . $auto ["autoKenteken"]  . " </td>";
          echo "<td>" . $auto ["autoMerk"]      . " </td>";
          echo "<td>" . $auto ["autoType"]      . " </td>";
          echo "<td>" . $auto ["autokmStand"]   . " </td>";
          echo "<td>" . $auto ["klantID"]       . " </td>";
          echo "</tr>";
      }
      echo "</table><br/>";

      echo "<form action='gar-delete-auto3.php' method='post'>";
        //klantID mag niet meer gewijzigd worden
        echo "<input type='hidden' name='klantidvak' value=$klantID>";
        //waarde 0 doorgegeven als er niet gechect wordt
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "Verwijder deze auto. <br />";
        echo "<input type='submit'>";
      echo "</form>";

    ?>

</body>

</html>