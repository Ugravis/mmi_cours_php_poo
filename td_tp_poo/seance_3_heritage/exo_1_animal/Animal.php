<?php
  class Animal {
    private string $name;
    private int $age;
    private int $maxAge;
    private array $alimentation = [];
    private bool $isAlive = true;

    public function __construct(string $name, int $age, int $maxAge) {
      $this->name = $name;
      $this->age = $age;
      $this->maxAge = $maxAge;
    }

    public function lire_informations(): string {
      $isAliveText = $this->isAlive ? "en vie" : "mort";
      return "{$this->name}, {$this->age} ({$isAliveText})";
    }

    public function mange(string $aliment): void {
      if ($this->isAlive) {
        array_push($this->alimentation, $aliment);
      }
    }

    public function vieillir(int $years): void {
      $this->age += $years;
      
      if ($this->age > $this->maxAge) {
        $this->isAlive = false;
      }
    }

    public function lire_regime(): string {
      return implode(', ', $this->alimentation);
    }
  }