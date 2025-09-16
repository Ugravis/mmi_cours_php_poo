<?php
// Comprendre l'héritage
// Classe Mère
class A
{
  // Propriétés
  public $prop1;
  public $prop2;
  // Constructeur
  public function __construct($arg1, $arg2)
  {
    $this->prop1 = $arg1;
    $this->prop2 = $arg2;
  }
  public function lire_information()
  {
    return $this->prop1 . ' ' . $this->prop2;
  }
}
// Class Fille
class B extends A
{
  // Propriété de la classe Fille
  public $prop3;
  //Constructeur
  public function __construct($arg1, $arg2, $arg3)
  {
    // Appel du constructeur de la classe parent
    parent::__construct($arg1, $arg2);
    $this->prop3 = $arg3;
  }
  // Méthode qui permet de modifier la propriété 3
  public function change($nouvellevaleur)
  {
    $this->prop3 = $nouvellevaleur;
  }
  // Surcharge de la méthode lire_information
  public function lire_information()
  {
    return parent::lire_information() . ' ' . $this->prop3;
  }
}