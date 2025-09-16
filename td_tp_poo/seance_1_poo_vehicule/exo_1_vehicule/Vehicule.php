<?php
  class Vehicule {
    public string $brand;
    public int $power;
    public float $mileage;

    public function __construct(string $brand, int $power, float $mileage = 0) {
      $this->brand = $brand;
      $this->power = $power;
      $this->mileage = $mileage;
    }

    public function display(): string {
      return "<p>{$this->brand}<br>{$this->power}<br>{$this->mileage}</p>";
    }

    public function edit_power(int $power): void {
      $this->power = $power;
    }

    public function drive(int $kms): void {
      $this->mileage += $kms;
    }

    public function display_mileage(): float {
      return $this->mileage;
    }
  }