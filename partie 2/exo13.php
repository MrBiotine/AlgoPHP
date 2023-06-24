<h1>XIII. Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour</p>
<h2>Résultat</h2>

<?php
class Voiture {
//attibuts de la classe

    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;

    private boolean $_vroom ;
    
//Le constructeur "magique"
public function __construct(string $marque, string $modele, int $nbPortes){
    $this->_marque = $marque;
    $this->_modele = $modele;
    $this->_nbPortes = $nbPortes ; 
    $this->_vitesseActuelle = 0 ;
    $this->_vroom = false ;  
}   

//les getter - accesseurs
public function getMarque(){
    return $this->_marque;    
}
public function getModele(){
    return $this->_modele;    
}
public function getNbPortes(){
    return $this->_nbPortes;    
}
public function getVitesseActuelle(){
    return $this->_vitesseActuelle;    
}
}







?>