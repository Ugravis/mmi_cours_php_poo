<?php
  require_once 'Car.php';

  final class TourismCar extends Car {
    private float $litersPer100Km;
    private float $mileage = 0;

    public function __construct(string $engineType, int $nbPassagers, string $brand, int $horseMotor, float $litersPer100Km) {
      parent::__construct($engineType, $nbPassagers, $brand, $horseMotor);
      $this->setLitersPer100km($litersPer100Km);
    }

    private function setLitersPer100km(float $litersPer100Km): void {
      if ($litersPer100Km > 0) {
        $this->litersPer100Km = $litersPer100Km;
      } else {
        echo "Erreur dans le nombre de L/100km. La propriété attend un float positif.";
      }
    }

    private function getLitersPer100Km(): float {
      return $this->litersPer100Km;
    }

    private function getMileage(): float {
      return $this->mileage;
    }

    public function drive($distance): void {
      if ($distance > 0) {
        $this->mileage += $distance;
      } else {
        echo "Erreur dans la distance. La propriété attend un float positif.";
      }
    }

    public function readCharacteristics(): string {
      return parent::readCharacteristics()."
        <li>Consommation en L/100km : <b>" . $this->getLitersPer100Km() . "</b></li>
        <li>Kilométrage : <b>" . $this->getMileage() . "</b></li>
      ";
    }
  }