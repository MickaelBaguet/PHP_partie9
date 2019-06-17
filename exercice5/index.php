<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 5</title>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Exercice 5 - PHP</h1>
                <h2>Partie 9</h2>
                <p class="lead">Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
                <a href="../index.php" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="justify-content-center">   
            <?php
            // timestamp du jour :
            // $today = time();
            // mktime($hour, $minute, $second, $month, $day, $year)
            // $timeStamp = mktime(0, 0, 0, 5, 16, 2016);
            // $res = ($today - $timeStamp) / 86400;
            ?>
            <!--<p>Nombre de jour entre les deux dates : <?= $res ?></p>-->
            <?php
            // Set de la date d'aujourd'hui
            $aujourdhui = new DateTime();
            // echo $aujourdhui->format('d/m/Y');
            // Date à comparer
            $dateCompare = new DateTime('16-05-2016');
            // diff(): méthode de la classe DateTime(), retourne la différence entre deux objets DateTime
            // On demande de faire la différence entre la première date ($aujourd'hui)...
            // ... et la deuxième date ($dateCompare) puis de l'afficher au format demandé (%a: Nombre total de jours) 
            echo $aujourdhui->diff($dateCompare)->format('Nombre de jours entre les deux dates : %a jours');
            ?>
        </div>
  </div>
</body>
</html>

