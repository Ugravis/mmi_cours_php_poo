<?php
  require 'Animal.php';
  require 'Chien.php';

  echo "<h2>Animal</h2><br>";

  $bestiole = new Animal('Une drôle de bête', 1, 10);
  
  $bestiole->mange('fruits');
  $bestiole->mange('légumes');

  echo $bestiole->lire_regime();
  echo "<br>";
  echo $bestiole->lire_informations();
  echo "<br><br>";

  $bestiole->vieillir(4);
  echo $bestiole->lire_informations();
  echo "<br><br>";

  $bestiole->vieillir(6);
  echo $bestiole->lire_informations();
  echo "<br><br>";

  echo "<h2>Chien</h2><br>";

  $chien1 = new Chien("Chien", 2, "Médor");

  echo $chien1->seNomme();
  echo "<br>";
  $chien1->mange("viande");
  $chien1->mange("croquettes");

  echo $chien1->lire_regime();
  echo "<br>";
  echo $chien1->lire_informations();