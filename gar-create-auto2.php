<!DOCTYPE html>
<html lang="nl">

<head>
    <meta name="author" content="Rayan Biharie">
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Create Auto 2</h1>
    <p>Een auto toevoegen aan de tabel auto in de database garage.</p>

    <?php
    //klantgegevens uit het formulier halen ----------------------------
    $autoKenteken       = $_POST["autokentekenvak"];
    $autoMerk           = $_POST["automerkvak"];
    $autoType           = $_POST["autotypevak"];
    $autokmStand        = $_POST["autokmstandvak"];
    $klantID            = $_POST["klantidvak"];

    // autogegevens invoeren in de tabel
    require_once "gar-connect.php";

    $sql = $conn->prepare("INSERT INTO auto SET :autoKenteken, :autoMerk, :autoType, :autokmStand, :klantID");

    // manier1 (of manier 2 gebruiken) ----------------------------------
    // $sql = $conn->bindParam(":autoKenteken", 	$autoKenteken);
	// $sql = $conn->bindParam(":autoMerk", 		$autoMerk);
	// $sql = $conn->bindParam(":autoType", 		$autoType);
	// $sql = $conn->bindParam(":autokmStand", 	    $autokmStand);
	// $sql = $conn->bindParam(":klantID", 		    $klantID);
    // $sql->execute();

    //manier 2 -----------------------------------------------------------
    $sql->execute
    (
        [
            "autoKenteken"  => $autoKenteken,
            "autoMerk"      => $autoMerk,
            "autoType"      => $autoType,
            "autokmStand"   => $autokmStand,
            "klantID"       => $klantID
        ]
    );

    echo "De auto is toegevoegd. <br />";
    echo "<a href='gar-menu.php'> Terug naar het menu. </a>";

    ?>
</body>

</html>