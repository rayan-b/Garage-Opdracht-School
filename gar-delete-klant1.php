<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-klant1.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage DELETE Klant 1</h1>
    <P>Dit formulier zoekt een klant op uit de tabel klanten van de database garage om hem te kunnen verwijderen.</P>
    <form action="gar-delete-klant2.php" method="post">
        Welk klantID wilt u verwijderen?
        <input type="text" name="klantidvak">
        <br />
        <input type="submit" value="Verzenden">
    </form>
</body>

</html>