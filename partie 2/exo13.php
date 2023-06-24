<h1>XIII. Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe.</p>
<h2>Résultat</h2>

<?php
class Voiture {
//attibuts de la classe

    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private float $_vitesseActuelle;

    private bool $_faitVroom ;
    
//Le constructeur "magique"
public function __construct(string $marque, string $modele, int $nbPortes){
    $this->_marque = $marque;
    $this->_modele = $modele;
    $this->_nbPortes = $nbPortes ; 
    $this->_vitesseActuelle = 0 ;
    $this->_faitVroom = false ;  
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
public function getIdVehicule(){    
    return $this->_marque." ".$this->_modele; 
}

public function getVitesseActuelle(){
    echo "La vitesse du véhicule " . $this->getIdVehicule() . " est de : $this->_vitesseActuelle km / h <br>";
    return $this->_vitesseActuelle;    
}
public function getFaitVroom() {
    return $this->_faitVroom;
}



//les setter - -mutateurs
public function setMarque(string $marque){
     $this->_marque = $marque;    
}
public function setModele(string $modele){
     $this->_modele = $modele;    
}
public function setNbPortes(int $nbPortes){
     $this->_nbPortes = $nbPortes;    
}
//  public function setVitesseActuelle($vitesseActuelle){}, à la place on définit accelerer(deltaV) et ralentir(deltaV)
//  public function setFaitVroom($DemarreOuNon){}, à la place on définit demarrer() et stopper()

public function demarrer(){
    if ($this->_faitVroom){
        echo "Le véhicule est déjà démarré <br>";
    }
    else {
        $this->_faitVroom = true ;
        echo "Le véhicule". $this->getIdVehicule() . " est démarré <br>";
    }
}

// arrete le véhicule, met la vitesse à 0 et éteint le moteur
public function stopper(){
    if ($this->_faitVroom){
        $this->_vitesseActuelle = 0;
        $this->_faitVroom = false;
        echo "Le véhicule ". $this->getIdVehicule() . " est stoppé <br>";
    }else {
        echo "Le véhicule est déjà stoppé ! <br>";
    }
}
public function accelerer ($deltaV){
    if ($this->_faitVroom){
        $this->_vitesseActuelle += $deltaV;
        echo "Le véhicule". $this->getIdVehicule() . " accélère de $deltaV km/h <br>";
    }else {
        echo "Pour accélèrer il faut démarrer le véhicule ". $this->getIdVehicule()."<br>" ;
    }
}
public function ralentir ($deltaV){
    if ($this->_faitVroom){
        if ($deltaV < $this->_vitesseActuelle){
            $this->_vitesseActuelle -= $deltaV;
            echo "Le véhicule". $this->getIdVehicule() . " ralentit de $deltaV km/h <br>";
        }else{
            
            echo "Le véhicule". $this->getIdVehicule() . " a ralentit de $this->_vitesseActuelle jusqu' à l'arrêt, moteur allumé.<br>";
            echo "Vous pouvez accélèrer ou stopper le moteur<br>";
            $this->_vitesseActuelle = 0;
        }
    }else{
        echo "Le véhicule". $this->getIdVehicule() . " est déjà stoppé !!.<br>";
        echo "Vous devez demarrer() pour pouvoir accelerer(), ralentir() ou stopper() <br>";
    }
}
//Overriding de la méthode magique __toString() pour nous faciliter l'affichage
public function __toString(){
    $message = "<br>
                Infos véhicule " . $this->getIdVehicule() . "<br>
                ***************************<br>
                Nom et modèle du véhicule : " . $this->getIdVehicule() . "<br>
                Nombre de portes : $this->_nbPortes. <br>
                Le véhicule $this->_marque est " . ($this->_faitVroom ? "démarré" : "à l'arrêt") . "<br>
                Sa vitesse actuelle est de : $this->_vitesseActuelle km / h <br>
                <br>";
    return $message; 

}
}
//tests et affichages 

$bar1 = new Voiture("Peugeot", "408", 5);
$bar2 = new Voiture("Citroën", "C4", 3);

$bar1->demarrer();
$bar1->accelerer(50);

$bar2->demarrer();
$bar2->stopper();
$bar2->accelerer(20);

$bar1->getVitesseActuelle();
$bar2->getVitesseActuelle();

echo $bar1 ;
echo $bar2 ;

echo "<br>************BONUS******************<br>";

$bar1->ralentir(27.23);
echo $bar1;
$bar1->ralentir(40);
echo $bar1;



?>