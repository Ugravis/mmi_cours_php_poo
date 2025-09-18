<?php
  require './classes/EngineVehicule.php';
  require './classes/Car.php';
  require './classes/SportCar.php';
  require './classes/TourismCar.php';
  require './classes/Truck.php';

  // $vehicule1=new EngineVehicule('E',5); // Impossible

  $vehicule2 = new Car('T', 5, 'Renault', 90);
  echo 'Véhicule2 est un objet de ' . get_class($vehicule2) . '<br>';
  echo $vehicule2->readCharacteristics();
  echo '<br><br>';

  $vehicule3 = new Car('E', 7, 'Tesla', 450);
  echo 'Véhicule3 est un objet de ' . get_class($vehicule3) . '<br>';
  echo $vehicule3->readCharacteristics();
  echo '<br><br>';

  $vehicule4 = new SportCar('T', 2, 'Porsche', 300, 5);
  echo 'Véhicule4 est un objet de ' . get_class($vehicule4) . '<br>';
  echo $vehicule4->readCharacteristics();
  echo '<br><br>';

  $vehicule5 = new TourismCar('T', 4, 'Fiat', 70, 5.5);
  echo 'Véhicule5 est un objet de ' . get_class($vehicule5) . '<br>';
  $vehicule5->drive(6000);
  echo $vehicule5->readCharacteristics();
  echo '<br><br>';

  $vehicule6 = new Truck('T', 1, 16, 2);
  echo 'Véhicule6 est un objet de ' . get_class($vehicule6) . '<br>';
  echo $vehicule6->readCharacteristics();
  echo '<br><br>';

  $vehicule7 = new Truck('T', 1, 24, 3);
  echo 'Véhicule7 est un objet de ' . get_class($vehicule7) . '<br>';
  echo $vehicule7->readCharacteristics();
  echo '<br><br>';

  echo "Nombre d'objets (instances) : " . EngineVehicule::getNbVehicules();