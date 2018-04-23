<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>gar-create-auto1.php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Garage Create Auto 1</h1>
    <p>Dit formulier wordt gebruikt om auto's gegevens in te voeren.</p>
    <form action="gar-create-auto2.php" method="post">
        Autokenteken:       <input type="text" name="autokentekenvak">  <br />
        Automerk:           <input type="text" name="automerkvak">      <br />
        Autotype:           <input type="text" name="autotypevak">      <br />
        Auto KM Stand:      <input type="text" name="autokmstandvak">   <br />
        Klant ID:           <input type="text" name="klantidvak">       <br />
       <input type="submit" value="Verzend formulier">
    </form>
</body>

</html>