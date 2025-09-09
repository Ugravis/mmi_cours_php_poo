<?php
  require_once 'Animal.php';

  class Chien extends Animal {
    private string $nomFamilier;

    public function __construct(string $name, int $age, string $nomFamilier) {
      parent::__construct($name, $age, 18);
      $this->nomFamilier = $nomFamilier;
    }

    public function seNomme(): string {
      return $this->nomFamilier;
    }

    public function lire_informations(): string {
      return parent::lire_informations().". Nom familier : {$this->nomFamilier}";
    }
  }