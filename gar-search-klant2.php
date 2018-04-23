<!DOCTYPE html>
<html>
<head>
	<title>gar-search-klant2.php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Garage Search Klant 2</h1>
	<p>
		Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel klant van de database garage.
	</p>
	<?php  
		//klantid uit het formulier halen ------------
		$klantid = $_GET["klantidvak"];

		//klantgegevens uit tabel halen --------------
		require_once "gar-connect.php";

		$klanten = $conn->prepare("SELECT klantID, klantNaam, klantAdres, klantPostcode, klantPlaats FROM klant WHERE klantID = :klantID");
		$klanten->execute(["klantID" => $klantID]);

		//klantgegevens in een nieuwe formulier laten zien -----------------

		echo "table";
		foreach ($klanten as $rij) 
		{
			echo "<tr>";
				echo "<td>" . $rij["klantID"] 		. "<td>";
				echo "<td>" . $rij["klantNaam"] 	. "<td>";
				echo "<td>" . $rij["klantAdres"] 	. "<td>";
				echo "<td>" . $rij["klantPostcode"] . "<td>";
				echo "<td>" . $rij["klantPlaats"] 	. "<td>";
			echo "</tr>";

		}
		echo "</table>";
		echo "<a href='gar-menu.php'> Terug naar het menu. </a>";
			
	?>
</body>
</html>