<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 2</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 2 - PHP</h1>
        <h2>Partie 9</h2>
        <p class="lead">Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <div class="justify-content-center">   
        <!-- d = Jour du mois, sur deux chiffres -->
        <!-- m = Mois au format numérique, avec zéros initiaux -->
        <!-- y = Année sur 2 chiffres -->
        <p> Date courante : <?= date('d-m-y'); ?></p>
        <?php
        // Classe Datetime() : Représentation d'une date et heure. 
        // Doit être utilisé avec ->format() pour être affiché
        $aujourdhui = new DateTime();
        ?>
        <p>Date courante (avec DateTime()) : <?= $aujourdhui->format('d-m-y'); ?></p>
    </div>
  </div>
</body>
</html>

