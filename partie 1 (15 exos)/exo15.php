<h1>XV. Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br><br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p><br>

<h2>Résultats</h2>

<?php

Class Personne {

    // on type les variables
    /*les attributs de la classe personne sont en private, seule cette classe y a un accès direct avec le sélecteur -> , à l'extérieur de cette classe , l'accès aux attributs passe par des getter et des setter */

    private string $_name ;           
    private string $_surname ;
    private DateTime $_birthdate ;
    private int $_age ;

/* on définie ("constuit") la méthode "magique" qui permet d'initilaiser les attributs de chaque instance que nous allons créer avec " new Personne($name,$surname,$birthdate) " */

    public function __construct(string $name,string $surname, string $birthdate){
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_birthdate = new DateTime($birthdate) ; 
        $this->_age = $this->timeAge();    
    }
     

/* On définit des methodes (un "getter") pour pouvoir accéder aux attributs d'une instance */

    public function getName(){
        return $this->_name;
    }

    public function getSurname(){
        return $this->_surname;
    }

    public function getBirthDate(){

        return $this->_birthdate;
    } 

    public function getAge(){
        return $this->_age;
    }

    //faite les setter
    public function setName($name){
         $this->_name = $name;
    }

    public function setSurname($surname){
        $this->_surname = $surname;
    }

    public function setBirthDate($birthdate){
       $this->_birthdate = new DateTime($birthdate);
    } 

//Une methode reservée à la classe pour calculer l'age à partir de la date de naissance :

    private function timeAge()
    {
    //Déclaration de la date actuelle    
    $dateJour = new DateTime();
    
    //On calcule la différence
    $difference = $this->_birthdate->diff($dateJour);
    
    //On retourne la différence en années
    return $difference->format('%Y');
    }

    /*Surcharge de la methode magique __toString qui définira automatiquement le comportement de l'objet lorsqu'il est traité comme une chaine de caractère , par exemple, ce que echo $obj; affichera. */

    public function __toString()
    {
        return $this->_surname." ".$this->_name." a ".$this->_age." ans.";
    }

}

//Création de 2 instances de la classe Personne :
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

/*

function CalculerAge($date)
{
//On déclare les dates à comparer
$dateNais = new DateTime($date);
$dateJour = new DateTime();

//On calcule la différence
$difference = $dateNais->diff($dateJour);

//On retourne la différence en années
return $difference->format('%Y');
}

*/

echo ($p1->getBirthDate())->format('d-m-Y') ."<br><br>"; //<== ceci est un test

// Affichage du Prénom Nom et l'age actuel de chaque instance Personne :
echo $p1."<br>" ;
echo $p2."<br>" ;
