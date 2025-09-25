<?php
  require 'classes/Person.php';
  require 'classes/Student.php';
  echo "hello";

  echo "<h2>Etape 1</h2>";

  echo Student::getHumanNumber();

  $person1 = new Student('Durand', 'Paul', 'homme', '1234567890A', 'GEA', 16);
  echo $person1->describe();
  echo '<br>';
  $person1->work(35);
  $person1->break(2);
  $person1->work(30);
  $person1->break(1);
  echo $person1->describe_with_money();
  echo '<br>';
  $person1->RAZmoney();
  echo $person1->describe_with_money();
  echo '<br>';
  echo "Age : <b>{$person1->getAge()}</b>";
  echo '<br>';
  $person1->setAge(17);
  echo "Age : <b>{$person1->getAge()}</b>";
  echo '<br>';
  $person1->work(10);