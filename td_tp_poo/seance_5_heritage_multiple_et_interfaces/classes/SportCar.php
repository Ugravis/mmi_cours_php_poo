<?php
  require_once 'Car.php';

  final class SportCar extends Car {
    private float $zeroToHundredTime;

    public function __construct(string $engineType, int $nbPassagers, string $brand, int $horseMotor, float $zeroToHundredTime) {
      parent::__construct($engineType, $nbPassagers, $brand, $horseMotor);
      $this->setZeroToHundredTime($zeroToHundredTime);
    }

    private function setZeroToHundredTime(float $zeroToHundredTime): void {
      if ($zeroToHundredTime > 0) {
        $this->zeroToHundredTime = $zeroToHundredTime;
      } else {
        echo "Erreur dans le nombre de secondes de 0 à 100 km/h. La propriété attend un float positif.";
      }
    }

    private function getZeroToHundredTime(): float {
      return $this->zeroToHundredTime;
    }

    public function readCharacteristics(): string {
      return parent::readCharacteristics().
        "<li>De 0 à 100 km/h (en secondes) : <b>" . $this->getZeroToHundredTime() . "</b></li>";
    }
  }