<h1>XIV. Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
echo $v1->getInfos()."  "<br>
echo $ve1->getInfos()."  "<br>
<h2>Résuktat</h2>

<?php

class Voiture {
    /* Sachons qu'une classe fille va être crée, l'attribue protected est utilisé pour s'assurer 
    que la Classe Voitures et ses Filles puisses accèder directement à ses attributs */
    protected string $_marque;
    protected string $_modele;
    protected string $_mode;

//Le constructeur "magique"
public function __construct(string $marque, string $modele) {
    $this->_marque = $marque;
    $this->_modele = $modele;
    $this->_mode = "classique";
}
// La fonction qui réccupère toutes les infos

public function getInfos () {
    return "Le véhicule $this->_marque $this->_modele est un modèle $this->_mode";
}

}

//Voici sa classe fille - elle un attribut en plus : l'autonomie
class VoiturElec extends Voiture {
    private int $_autonomie ;    


/*Le constructeur de la classe VoitureElec dispose en première ligne de « parent ::__construct(…) ». Ce code oblige la classe VoitureElec à respecter les paramètres du constructeur de sa classe mère */

public function __construct(string $marque, string $modele, int $autonomie ) {
    parent::__construct($marque, $modele);
    $this->_autonomie = $autonomie ;
    $this->_mode = "électrique";
}

public function getInfos () {
	$infos=parent::getInfos()." avec une autonomie de : $this->_autonomie";
	return $infos;    
}

/*Equivalent à :
public function getInfos () {
    return "Le véhicule $this->_marque $this->_modele est un modèle $this->_mode avec une autonomie de : $this->_autonomie";
}
*/


}
//instanciation et affichage des infos spécifique à chaque classe

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoiturElec("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";


?>