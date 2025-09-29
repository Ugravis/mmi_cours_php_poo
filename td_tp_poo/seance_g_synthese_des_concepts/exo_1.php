<?php
  require 'classes/Person.php';
  require 'classes/Student.php';
  require 'classes/StudentMMI.php';

  echo "<h2>Etape 1</h2>";

  echo Student::getPersonNumber();

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

  echo "<br><h2>Etape 2</h2>";

  $person2 = new Student('Fraichi', 'Sarah', 'femme', '9012345678B', 'TC', 18);
	echo $person2->describe().'<br>';
	$person2->work(20);
	echo $person2->describe_with_money();
	echo Student::getPersonNumber();

  echo "<br><h2>Etape 3</h2>";

  $person3 = new Person('Palenor', 'Hubert', 'homme');
  echo $person3->describe();

  echo "<br><h2>Etape 4</h2>";

  $person4 = new StudentMMI('Hontoi', 'Franck', 'homme', '6789012345C', 18, 'Web avancé');
	echo $person4->describe();
  echo "<br>";
	$person4->work(35);
	echo $person4->describe_with_money();
  echo "<br>";
	echo $person4->set_result_and_describe(11);
  echo "<br>";
	echo $person4->describe_with_option();
  echo "<br>";
	$person4->changeOption('Conception graphique');
	echo $person4->describe_with_option();
  echo "<br>";

	echo Student::getPersonNumber();
	unset($person4);
	echo Student::getPersonNumber();