<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>gar-create-klant1.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Create Klant 1</h1>
    <p>Dit formulier wordt gebruikt om klantengegeven in te voeren.</p>
    <form action="gar-create-klant2.php" method="post">
        Klantnaam:        <input type="text" name="klantnaamvak">      <br />
        Klantadres:       <input type="text" name="klantadresvak">     <br />
        Klantpostcode:    <input type="text" name="klantpostcodevak">  <br />
        Klantplaats:       <input type="text" name="klantplaatsvak">    <br />
        <input type="submit" value="Verzend formulier">
    </form>
</body>

</html>