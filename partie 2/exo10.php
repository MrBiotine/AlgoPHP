<h1>X. Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>
<h2>Résultat</h2>
<?php

// Déclaration du tableau des boutons radio genre
$genderRadio = ["Monsieur", "Madame"];

// Déclaration du tableau avec les champs texte
$infosInput = ["Nom", "Prénom", "Mail", "Ville"];

// Déclaration du tableau du menu déroulant
$formations = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

//fonction pour affficher les boutons radio "genre"
function afficherRadio($array){   
    foreach($array as $key){
    echo "<input type='radio'name='gender'> <label for=".$key.">$key</label><br>";
    } 
}

//fonction pour afficher les champs texte
function displayInput($array) {
   
    foreach ($array as $key) {
        echo "<label for=" . $key . ">" . $key . "</label><br>";
        echo "<input type=texte id=" . $key . "><br>";
    }
    
}

//fonction pour afficher la liste déroulante
function alimenterListeDeroulante($array){   
    echo "<select id='Formation' name='Formation'>" . "Formation";

    foreach($array as $key){
    echo "<option value=".$key. ">" .$key. "</option><br>";
    } 
        echo "</select><br>";
}

// Affichage
afficherRadio($genderRadio);
echo "<br><br>";
displayInput($infosInput);
echo "<br>";
echo "<label for=''> Les formations : </label><br>";
alimenterListeDeroulante($formations);
echo "<br><br>";
echo '<input type="submit" value="Valider"/>';
