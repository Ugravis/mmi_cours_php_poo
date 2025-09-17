<?php
  require 'Vehicule.php';
  require 'Voiture.php';
  require 'Bus.php';

  $vehicule1 = new Vehicule("Renault", 105, 2500);
  echo $vehicule1->lire_caracteristiques();
  echo "<br><br>";

  $car1 = new Voiture("Citroën", 150, 1400, "suv");
  $car1->parcourir(120);
  echo $car1->lire_caracteristiques();

  echo "<br><br>";
  $car2 = new Voiture("Peugeot", 145, 12000, "berline");
  echo $car2->lire_caracteristiques();
  echo "<br>";
  $car2->setType('suv');

  echo "<br><br>";
  $bus1 = new Bus("Man", 360, 17000, 24, 2);
  echo $bus1->lire_caracteristiques();