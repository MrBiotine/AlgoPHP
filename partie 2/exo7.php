<h1>VII. Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>
<h2>Résultat</h2>

<style>
    ul {
        text-decoration: none;
    }
</style>

<?php
//tabeau associatif avec 3 entrées et 2 valeurs possible "checked" ou ""
$elements = [
    "choix 1"=>"",
    "choix 2"=>"checked",
    "choix 3"=>""
];

function genererCheckbox($elements){
    echo "<ul>";
    foreach($elements as $key=>$value){
    echo "<li><input type='checkbox' '. $value .' >".$key. "</li>";
    }
    echo "</ul>";
}

genererCheckbox($elements);

?>