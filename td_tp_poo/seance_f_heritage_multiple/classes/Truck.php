<?php
  require_once 'EngineVehicule.php';

  class Truck extends EngineVehicule {
    private float $tonnage;
    private int $axlesNumber;

    public function __construct(string $engineType, int $nbPassagers, float $tonnage, int $axlesNumber) {
      parent::__construct($engineType, $nbPassagers);
      $this->setTonnage($tonnage);
      $this->setAxlesNumber($axlesNumber);
    }

    protected function setTonnage(float $tonnage): void {
      if ($tonnage > 0) {
        $this->tonnage = $tonnage;
      } else {
        echo "Erreur dans le tonnage. La propriété attend un float positif.";
      }
    }

    protected function setAxlesNumber(int $axlesNumber): void {
      if ($axlesNumber > 0) {
        $this->axlesNumber = $axlesNumber;
      } else {
        echo "Erreur dans le nombre d'essieux. La propriété attend un int positif.";
      }
    }

    protected function getTonnage(): float {
      return $this->tonnage;
    }

    protected function getAxlesNumber(): int {
      return $this->axlesNumber;
    }

    public function readCharacteristics(): string {
      return 
        "Infos camion :
          <li>Type de moteur : <b>" . parent::getEngineType() . "</b></li>
          <li>Nombre de passagers : <b>" . parent::getNbPassagers() . "</b></li>
          <li>Tonnnage : <b>" . $this->getTonnage() . "</b></li>
          <li>Nombre d'essieux : <b>" . $this->getAxlesNumber() . "</b></li>
        ";
    }
  }