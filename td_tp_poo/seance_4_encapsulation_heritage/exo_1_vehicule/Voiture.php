<?php
  require_once 'Vehicule.php';

  class Voiture extends Vehicule {
    private string $type;

    public function __construct(string $marque, int $puissance, float $kilometrage, string $type) {
      parent::__construct($marque, $puissance, $kilometrage);
      $this->setType($type);
    }

    public function setType(string $type): void {
      $allowedTypes = ["berline", "suv", "4x4", "break"];
      in_array($type, $allowedTypes)
       ? $this->type = $type
       : $this->type = "INCORRECT";
    }

    public function lire_type(): string {
      return $this->type;
    }
  }