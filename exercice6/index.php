<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercice 6</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Exercice 6 - PHP</h1>
                <h2>Partie 9</h2>
                <p class="lead">Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
                <a href="../index.php" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="row justify-content-center">   
            <?php
            // cal_days_in_month: Retourne le nombre de jours dans un mois, pour une année et un calendrier donné
            $numberOfDay = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
            ?>
            <p>Il y a <?= $numberOfDay ?> jours dans le mois de février de l'année 2016.</p>
        </div>
  </div>
</body>
</html>