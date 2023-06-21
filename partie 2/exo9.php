<h1>IX. Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>
<h2>Résultats</h2>



<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function afficherRadio($nomsRadio){   
    foreach($nomsRadio as $key){
    echo "<input type='radio'name='gender'> <label for=".$key.">$key</label><br>";
    } 
}

afficherRadio($nomsRadio);


?>