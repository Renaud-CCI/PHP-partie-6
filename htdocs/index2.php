<?php


// # PHP - Les paramètres d'URL
// ## Exercice 1
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**

// ## Exercice 2
// Faire une page index.php. Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**

// ## Exercice 3
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**

// ## Exercice 4
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?language=PHP&server=LAMP**

// ## Exercice 5
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?week=12**

// ## Exercice 6
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?building=12&room=101**

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    function isURL($parameter, $default = "Un paramètre n'est pas renseigné"){
        if (isset($_GET[$parameter])){
            if ($_GET[$parameter]){
                return $_GET[$parameter];
            } else {
                return $default;
            };
        };
        // isset($_GET[$parameter])? return $_GET[$parameter]: return $default;
    };

    function weekInterval(){
        if (isset($_GET["endDate"]) && isset($_GET["startDate"]) && ($_GET["endDate"]) && ($_GET["startDate"])){
            $date1 = date_create($_GET["startDate"]);
            $date2 = date_create($_GET["endDate"]);
            $week = date_diff($date1, $date2);
            return round(($week->format('%a')/7),1);
        } else {
            return "Nous ne pouvons calculer le nombre de semaines de votre séjour";
        }
    };
    ?>
    Prénom : <?= isURL("firstname", "Le prénom n'est pas renseigné") ?> <br>
    Nom : <?= isURL("lastname", "Le nom n'est pas renseigné") ?> <br>
    Age : <?= isURL("age", "L'age n'est pas renseigné") ?> <br>
    Arrivée : <?= isURL("startDate", "La date de départ n'est pas renseignée") ?> <br>
    Départ : <?= isURL("endDate", "La date d'arrivée n'est pas renseignée") ?> <br>
    Nombre de semaines : <?= isset($_GET["week"])? isURL("week") : weekInterval();?> <br>
    Hotel : <?= isURL("building", "L'hotel n'est pas renseigné") ?> <br>
    Chambre : <?= isURL("room", "La chambre n'est pas renseignée") ?> <br>
    <hr>
    Language : <?= isURL("language", "Le language n'est pas renseigné (et on s'en fout)") ?> <br>
    Language : <?= isURL("server", "Le serveur n'est pas renseigné (et on s'en fout)") ?> <br>

    <br>
    <hr>
    <br>
    <a href="index.php">Retour Index</a>
</body>
</html>