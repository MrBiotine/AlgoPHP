<h1>VI. Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);</p>
<h2>Résultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante($elements){   
    echo "<select id='etat_civil'>";
 
    foreach($elements as $key){
    echo "<option value=".$key. ">" .$key. "</option><br>";
    } 
        echo "</select><br>";
}

alimenterListeDeroulante($elements);


?>