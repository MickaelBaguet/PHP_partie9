<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 1</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 1 - PHP</h1>
        <h2>Partie 9</h2>
        <p class="lead">Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <div class="justify-content-center">   
        <!-- d = Jour du mois, sur deux chiffres -->
        <!-- m = Mois au format numérique, avec zéros initiaux -->
        <!-- Y = Année sur 4 chiffres -->
        <p> Date courante : <?= date('d/m/Y'); ?></p>
        <?php
        // Classe Datetime() : Représentation d'une date et heure. 
        // Doit être utilisé avec ->format() pour être affiché
        // new DateTime() : date courante
        $aujourdhui = new DateTime();
        ?>
        <p>Date courante (avec DateTime()) : <?= $aujourdhui->format('d/m/Y'); ?></p>
    </div>
  </div>
</body>
</html>

