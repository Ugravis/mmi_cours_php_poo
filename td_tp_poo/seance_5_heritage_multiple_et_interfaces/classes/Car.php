<?php 
  require_once 'EngineVehicule.php';

  class Car extends EngineVehicule {
    private string $brand;
    private int $horseMotor;

    public function __construct(string $engineType, int $nbPassagers, string $brand, int $horseMotor) {
      parent::__construct($engineType, $nbPassagers);
      $this->setBrand($brand);
      $this->setHorseMotor($horseMotor);
    }

    protected function setBrand(string $brand): void {
      $this->brand = $brand;
    }

    protected function setHorseMotor(int $horseMotor): void {
      $this->horseMotor = $horseMotor;
    }

    protected function getBrand(): string {
      return $this->brand;
    }

    protected function getHorseMotor(): string {
      return $this->horseMotor;
    }

    public function readCharacteristics(): string {
      return 
        "Infos voiture :
          <li>Type de moteur : <b>" . parent::getEngineType() . "</b></li>
          <li>Nombre de passagers : <b>" . parent::getNbPassagers() . "</b></li>
          <li>Marque : <b>" . $this->getBrand() . "</b></li>
          <li>Puissance (en chevaux) : <b>" . $this->getHorseMotor() . "</b></li>
        ";
    }
  }