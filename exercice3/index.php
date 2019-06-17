<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h2>Partie 9</h2>
        <p class="lead">Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>
        <p class="lead">Bonus : Le faire en français.</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <div class="row justify-content-center">   
        <?php
        // setlocale: permet de changer les informations de localisation
        // Permet l'affichage de la date en français (et non en anglais)
        setlocale (LC_TIME, 'fr_FR.utf8');
        // %A = Nom complet du jour de la semaine      %d = Jour du mois en numérique, sur 2 chiffres 
        // %B = Nom complet du mois, suivant la locale  %Y = L'année, sur 4 chiffres
        // strftime — Formate une date/heure locale avec la configuration locale
        echo strftime("%A %d %B %Y");
        ?>
    </div>
  </div>
</body>
</html>

