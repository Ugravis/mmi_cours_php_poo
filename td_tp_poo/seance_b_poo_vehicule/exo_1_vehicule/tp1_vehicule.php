<?php
  require 'Vehicule.php';

  $vehicule1 = new Vehicule("RENAULT", 90, 15000);
  $vehicule2 = new Vehicule("PEUGEOT", 110, 3000);
  
  echo "<h3>Before</h3>";
  echo $vehicule1->display();
  echo $vehicule2->display();

  $vehicule1->edit_power(150);
  $vehicule1->drive(3500);

  $vehicule2->drive(1500);

  echo "<h3>After</h3>";
  echo $vehicule1->display();
  echo $vehicule2->display();