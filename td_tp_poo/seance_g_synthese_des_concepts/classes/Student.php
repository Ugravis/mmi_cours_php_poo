<?php
  require_once 'Person.php';

  class Student extends Person {
    protected string $studentID;
    protected int $age;
    protected string $formation;
    protected string $result;
    protected static int $nbStudents = 0;

    public function __construct(string $surname, string $name, string $sex, string $studentID, string $formation, int $age) {
      parent::__construct($surname, $name, $sex);
      $this->setStudentID($studentID);
      $this->setFormation($formation);
      $this->setAge($age);
      self::$nbStudents ++;
    }

    public function setStudentID(string $studentID): void {
      if (preg_match("/^\d{10}[A-Za-z]$/", $studentID)) {
        $this->studentID = $studentID;
      } else {
        echo "Erreur dans le numéro étudiant. La propriété attend une string de 10 chiffres et une lettre.";
      }
    }

    public function setFormation(string $formation): void {
      $this->formation = $formation;
    }

    public function setAge(int $age): void {
      if ($age > 0) {
        $this->age = $age;
      } else {
        echo "Erreur dans l'âge. La propriété attend un int positif.";
      }
    }

    public function getAge(): int {
      return $this->age;
    }

    public function work(float $hours): void {
      if (!$hours > 0) {
        echo "Erreur dans le nombre d'heures travaillées. La propriété attend un float positif.";
        return;
      }
      if ($this->age < 18) {
        $this->money += (9.5 * $hours) * 0.8;
      } else {
        $this->money += 9.5 * $hours;
      }
    }

    public function describe_with_result(float $note): string {
      $this->result = $note >= 10
        ? "reçu(e)"
        : "ajourné(e)";
      return parent::describe()."<br><p>Résultat : <b>{$this->result}</b></p>";
    }

    public function getStudentNumber(): string {
      return "<p>Nombre d'étudiants : <b>" . self::$nbStudents . "</b></p>";
    }
  }