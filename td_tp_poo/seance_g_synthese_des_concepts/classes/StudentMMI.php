<?php
  require_once 'Student.php';

  final class StudentMMI extends Student {
    private string $optionS4;

    public function __construct(string $surname, string $name, string $sex, string $studentID, int $age, string $optionS4) {
      parent::__construct($surname, $name, $sex, $studentID, "MMI", $age);
      $this->changeOption($optionS4);
    }

    public function changeOption($optionS4): void {
      $this->optionS4 = $optionS4;
    }

    public function describe_with_option(): string {
      return parent::describe()."<li>Option : <b>{$this->optionS4}</b></li>";
    }

    public function describe_with_mmi(): string {
      return parent::describe()."<li>Élève de : <b>MMI</b></li>";
    }
  }