<?php

  class Vehicule {
    protected string $marque;
    protected int $puissance;
    protected float $kilometrage;

    public function __construct(string $marque, int $puissance, float $kilometrage) {
      $this->marque = $marque;
      $this->puissance = $puissance;
      $this->kilometrage = $kilometrage;
    }

    public function parcourir(float $distance): void {
      $this->kilometrage += $distance;
    }

    public function lire_caracteristiques(): string {
      return
        "Infos véhicule :
          <li>Marque : <b>{$this->marque}</b></li>
          <li>Puissance : <b>{$this->puissance}</b></li>
          <li>Kilométrage : <b>{$this->kilometrage}</b></li>
        ";
    }
  }