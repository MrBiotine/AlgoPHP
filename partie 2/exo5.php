<h1>V. Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>
<h2>Résultat</h2>

<?php

$namesInput = array("Nom", "Prénom", "Ville");

function displayInput($namesInput) {
    echo
    '<form method="post" action="">';

    foreach ($namesInput as $key) {
        echo
        '<label for="' . $key. '">' . $key . '</label> :<br>
        <input type="text" id="' . $key . '"name="userinfo" required><br>';
    }
    echo
    '<input type="submit" value="Valider"/>
    </form>';
}

displayInput($namesInput);



?>