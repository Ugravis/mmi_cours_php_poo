<?php
  interface iHuman {
    public function work(float $hours): void;
    public function break(int $days): void;
    public function describe(): string;
  }

  class Person implements iHuman {
    protected string $surname;
    protected string $name;
    protected string $sex;
    protected float $money = 0;
    protected int $offDays;

    public function __construct(string $surname, string $name, string $sex) {
      $this->setSurname($surname);
      $this->setName($name);
      $this->setSex($sex);
    }

    public function setSurname(string $surname): void {
      $this->surname = $surname;
    } 

    public function setName(string $name): void {
      $this->name = $name;
    } 

    public function setSex(string $sex): void {
      $sexTypes = ["homme", "femme", "autre"];
      if (in_array($sex, $sexTypes)) {
        $this->sex = $sex;
      } else {
        echo "Erreur dans le sexe renseigné. Options possibles : " . implode(', ', $sexTypes);
      }
    }
    
    public function work(float $hours): void {
      if ($hours > 0) {
        $this->money += 9.5 * $hours;
      } else {
        echo "Erreur dans le nombre d'heures travaillées. La propriété attend un float positif.";
      }
    }

    public function break(int $days): void {
      if ($days > 0) {
        $this->offDays += $days;
      } else {
        echo "Erreur dans le nombre de jours de repos. La propriété attend un int positif.";
      }
    }

    public function RAZmoney(): void {
      $this->money = 0;
    }

    public function RAZoffDays(): void {
      $this->offDays = 0;
    }

    public function describe(): string {
      return "<p>Nom : <b>{$this->name}<br>Prénom : </b>{$this->surname}<b></b><p>";
    }

    public function describe_with_money(): string {
      return $this->describe()."<br><p>Argent : <b>{$this->money}</b></p>";
    }
  }