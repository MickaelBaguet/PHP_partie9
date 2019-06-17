<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 4 - PHP</h1>
        <h2>Partie 9</h2>
        <p class="lead">Afficher le timestamp du jour.</p>
        <p class="lead">Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <div class="justify-content-center">   
        <!-- mktime : Retourne le timestamp UNIX d'une date -->
        <!-- timestamp du jour : -->
        <p>Timestamp du jour (avec time()) : <?= time() ?></p>
        <!-- mktime($hour, $minute, $second, $month, $day, $year) -->
        <p>Timestamp du mardi 2 août 2016 à 15h00 (avec mktime()) : <?= mktime(15, 00, 00, 8, 2, 2016) ?></p>
        <?php
        // Classe Datetime() : Représentation d'une date et heure. 
        // Doit être utilisé avec ->format() pour être affiché
        $today = new DateTime();
        // Déclaration d'une date 'fixe' avec une partie JJ-MM-YY et une partie HH:MM:SS séparée par un T
        $date = new DateTime('02-08-2016T15:00:00')
        ?>
        <hr>
        <!-- getTimestamp(): méthode de la classe DateTime qui retourne le timestamp Unix de la date -->
        <p>Timestamp du jour avec l'objet DataTime : <?= $today->getTimestamp() ?></p>
        <p>Timestamp du mardi 2 août 2016 à 15h00 avec l'objet DataTime : <?= $date->getTimestamp() ?></p>
    </div>
  </div>
</body>
</html>

