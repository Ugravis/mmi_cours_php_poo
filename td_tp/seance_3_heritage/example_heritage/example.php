<?php
// MMI - M3203 POO
// Cours héritage
// Notion d'héritage
// Appel de la classe
require('Classes.php');

// Un objet de la classe A
$objet1 = new A('Classe A', 'Mère');
// Affichage des valeurs des propriétés de la classe A
echo $objet1->lire_information();
echo '<br>';

// Un objet de la classe B, 
// spécialisation de la classe A
$objet2 = new B('Classe B', 'Fille', '');
echo $objet2->lire_information();
echo '<br>';

$objet2->change('spécialisation');
echo $objet2->lire_information();
echo '<br>';