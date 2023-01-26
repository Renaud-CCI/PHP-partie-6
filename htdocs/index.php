

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercice 6</title>
</head>
<body>
    <form action="index2.php" method="get">
        <p>Language utilisé : <input type="text" name="language" value="PHP" /> Serveur : <input type="text" name="server" value="DevilBox" /></p>
        <p>Votre prénom : <input type="text" name="firstname" /></p>
        <p>Votre nom : <input type="text" name="lastname" /></p>
        <p>Votre age : <input type="text" name="age" /></p>
        <p>Date de départ: <input type="date" name="startDate"></p>
        <p>Date d'arrivée : <input type="date" name="endDate"></p>
        <p>Hotel : <input type="number" name="building" min="0" max="12"></p>
        <p>Chambre : <input type="number" name="room"></p>
        <p><input type="submit" value="OK"></p>

    </form>

</body>
</html>