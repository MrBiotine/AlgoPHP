public function ralentir($deltaVitesse) {
        // si le véhicule est démarré
        if ($this->isDemarree) {
            // si on roule à au moins delta km/h
            if ($this->vitesseActuelle >= $deltaVitesse) {
                // on ralentit de delta
                // $this->vitesseActuelle = $this->vitesseActuelle - $deltaVitesse;
                $this->vitesseActuelle -= $deltaVitesse;
                echo "Le véhicule " . $this->getNomComplet() . " ralentit de $deltaVitesse km / h<br />";
            } else {
                // sinon on ne roule pas assez vite pour ralentir d'autant
                echo "Le véhicule " . $this->getNomComplet() . " veut ralentir de $deltaVitesse km / h<br />";
                echo "Il ne roule pas assez vite, il a une vitesse actuelle de $this->vitesseActuelle km / h !<br />";
            }
        } else {
            // sinon on ne ralentit pas
            echo "Le véhicule " . $this->getNomComplet() . " veut ralentir de $deltaVitesse km / h<br />";
            echo "Pour ralentir, il faut démarrer le véhicule " . $this->getNomComplet() . " !<br />";
        }
    }

    public function getInfos() {
        echo "<br />";
        echo "Infos véhicule " . $this->getNomComplet() . "<br />";
        echo "********************<br />";
        echo "Nom et modèle du véhicule : " . $this->getNomComplet() . "<br />";
        echo "Nombre de portes : $this->nbPortes<br />";
        // opérateur ternaire (ternary operator) => CONDITION ? SIVRAI : SIFAUX
        echo "Le véhicule $this->marque est " . ($this->isDemarree ? "démarré" : "à l'arrêt") . "<br />";
        echo "Sa vitesse actuelle est de : $this->vitesseActuelle km / h<br />";
        echo "<br />";
    }

    // getters/setters

    public function getMarque() {
        return $this->marque;
    }
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }
    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getNbPortes() {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes) {
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle() {
        echo "La vitesse du véhicule " . $this->getNomComplet() . " est de $this->vitesseActuelle km / h<br />";
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle) {
        // $this->vitesseActuelle = $vitesseActuelle;
        echo "Vraiment désolé, mais nous ne pouvons pas accepter cette demande, veuillez passer par la méthode accelerer() ou ralentir() afin de modifier la vitesse actuelle du véhicule tout en respectant les règles métier.";
    }

    public function getIsDemarree() {
        return $this->isDemarree;
    }
    public function setIsDemarree($isDemarree) {
        // $this->isDemarree = $isDemarree;
        echo "Vraiment désolé, mais nous ne pouvons pas accepter cette demande, veuillez passer par la méthode demarrer() ou stopper() afin de démarrer ou stopper le véhicule tout en respectant les règles métier.";
    }
}



// création et utilisation d'instances de la classe Voiture
$voiture408 = new Voiture("Peugeot", "408", 5);
$voitureC4 = new Voiture("Citroën", "C4", 3);

$voiture408->demarrer();
$voiture408->accelerer(50);

$voitureC4->demarrer();
$voitureC4->stopper();
$voitureC4->accelerer(20);

$voiture408->getVitesseActuelle();
$voitureC4->getVitesseActuelle();

$voiture408->getInfos();
$voitureC4->getInfos();