<?php
  abstract class EngineVehicule {
    private string $engineType;
    private int $nbPassagers;
    static int $nbVehicules;

    protected function __construct(string $engineType, int $nbPassagers) {
      $this->setEngineType($engineType);
      $this->setNbPassagers($nbPassagers);
      $this->nbVehicules += 1;
    }

    protected function setEngineType(string $engineType): void {
      $allowedEngineTypes = ["T", "E"];
      if (in_array($engineType, $allowedEngineTypes)) {
        $this->engineType = $engineType;
      } else {
        echo "Erreur dans le type du moteur. Options possibles : ";
      }
    }

    protected function setNbPassagers(int $nbPassagers): void {
      if (is_int($nbPassagers) & $nbPassagers > 0) {
        $this->nbPassagers = $nbPassagers;
      } else {
        echo "Erreur dans le nombre de passager. La propriété attend un int.";
      }
    }

    protected function getEngineType(): string {
      return $this->engineType;
    }

    protected function getNbPassagers(): int {
      return $this->nbPassagers;
    }

    protected function getNbVehicules(): int {
      return $this->nbVehicules;
    }
  }