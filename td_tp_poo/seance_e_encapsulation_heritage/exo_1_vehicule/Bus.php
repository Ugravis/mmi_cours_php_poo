<?php
  require_once 'Vehicule.php';

  class Bus extends Vehicule {
    private int $nbPlacesAssises;
    private int $nbEssieux;

    public function __construct(string $marque, int $puissance, float $kilometrage, int $nbPlacesAssises, int $nbEssieux) {
      parent::__construct($marque, $puissance, $kilometrage);
      $this->nbPlacesAssises = $nbPlacesAssises;
      $this->nbEssieux = $nbEssieux;
    }

    public function lire_caracteristiques(): string {
      return parent::lire_caracteristiques()."<li>Places assises : <b>{$this->nbPlacesAssises}</b></li><li>Essieux : <b>{$this->nbEssieux}</b></li>";
    }
  }