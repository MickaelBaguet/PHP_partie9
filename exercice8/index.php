<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercice 8</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Exercice 8 - PHP</h1>
                <h2>Partie 9</h2>
                <p class="lead">Afficher la date du jour - 22 jours.</p>
                <a href="../index.php" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="row justify-content-center">         
            <?php
            $today = new DateTime();
            // Déclaration d'un intervelle de 22 jours
            // sub: méthode de la classe DateTime qui soustrait la durée spécifiée par un objet DateInterval à un objet DateTime. 
            $today->sub(new DateInterval('P22D'));
            ?>
            <p>Date du jour - 22 jours : <?= $today->format('d/m/Y') ?></p>
        </div>
  </div>
</body>
</html>