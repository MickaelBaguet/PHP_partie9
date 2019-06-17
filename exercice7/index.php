<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercice 7</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Exercice 7 - PHP</h1>
                <h2>Partie 9</h2>
                <p class="lead">Afficher la date du jour + 20 jours.</p>
                <a href="../index.php" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="justify-content-center">         
            <?php
            // Déclaration d'une date
            $today = new DateTime();
            // La classe DateInterval représente un intervalle de dates.
            // Un intervalle stocke un nombre fixe de durées (en années, mois, jours, heures, etc.) ...
            //... ou une chaîne relative à une durée dans un format compréhensible par le constructeur de la classe DateTime. 
            // Déclaration d'un interval de 20 jours
            // Partie date: commence par un P, Partie horaire: commence par un T
            // 
            // add: méthode de la classe DateTime qui ajoute la durée d'un objet DateInterval à un objet DateTime. 
            $today->add(new DateInterval('P20D'));
            ?>
            <p>Date du jour + 20 jours : <?= $today->format('d/m/Y') ?></p>
        </div>
  </div>
</body>
</html>