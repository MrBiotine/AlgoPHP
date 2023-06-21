<h1>I. Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
<h2>Résultat</h2>

<style>
    .customTxt {
        color: red ;
        text-transform: uppercase;
    }
</style>

<?php
$texte = "« Mon texte en paramètre »";

function convertirMajRouge($texte){
    echo "<p class='customTxt'>$texte</>"
}
convertirMajRouge($texte);


?>