# PHP POO

## Visibilité

- `public` : propr / fx accessibles partout. 
- `protected` : propr / fx accessibles unqmt ds la clss et ses enfants. 
- `private` : propr / fx accessibles unqmt ds la clss directe. 

## Encapsulation

Via fonctions : accesseur / `getter` OU mutateur / `setter`. 

> Logique : propriété `public` = pas d'encapsulation. 

## Héritage

- Classe parent : `class Parent`. Options : `abstract` : y interdire la création d'objets. 
- Classe enfant : `class Child extends Parent`. Options : `final` : y interdire la création d'une classe enfant. 

> Les méthodes parent s'appellent via `parent::` ou `nomDeLaClasse::`. 

## Méthodes propres

- `__construct()`. Appelé via le `new`. 
- `__destruct()`. Appelé via le `unset()`. 
- `__toString()` : permet d'obtenir un retour string des propr (svt débug). 
- `__clone()`. Appelé lors de clone. 

> Autres : `__get()`, `__set()`, `__call()`, `__isset()`, `__unset()`. 

## Interfaces

= Liste des méthodes publiques qu'une classes doit implémenter au minimum. Se note `iExample`. 

> Une clss pt implémenter plusi i.  
> Une i pt étendre une autre i. 

## Code example

```php
<?php
  interface iSponsor {
    public function getInfo(): string;
  }


  class Sponsor implements iSponsor {
    private string $name;
    static int $sponsorNumber = 0;

    public function __construct(string $name) {
      $this->setName($name);
      self::sponsorNumber++;
    }

    function __destruct() {
      /* ... */
    }

    private function setName(): void {
      $this->name = $name;
    }

    public function getInfo(): string {
      return "Nom : <b>{$this->name}</b>"
    }
  }


  class Equipment extends Sponsor {
    private string $bike;

    public function __construct(string $name, string $bike) {
      parent::__construct($name)
      $this->setBike($bike)
    }

    public function getInfo(): string {
      return parent::getInfo() . "<br>Vélo : <b>{$this->bike}</b>"
    }
  }


  $sponsorEquipmentTest = new Sponsor("Visma", "Cervelo");
  echo $sponsorTest->getInfo();
```

## Divers

Comparaison d'objets partielle : `if($object1 == $object2)` ou stricte : `if($object1 == $object2)`. 

`$objectB = $objectA` -> copie tout de A sur B, même l'adresse mémoire. 
`$objectB = clone $objectA` -> crée un nouveau objet (B) avec les propr de A. 

## Remarques

> Les méthodes statiques peuvent être appelées sur la class sans créer un objet. Example : une classe de méthodes mathématiques : `static public function multiplication($number1, $number2)`. 

> `__clone()` très utile pour faire par ex un self::instancesNumber++, car le clone ne déclenche pas le __construct(). 

## Notation

**TP noté** : le 23/10, 1h15 - le code ne sera pas évalué : seulement un **QCM** après.  
**Eval "écrite"** : le 07/11, **QCM**.  

## Ressources

Cours et tps : https://cours.davidannebicque.fr/programmation-orientee-objet-en-php/decouverte/seance-1