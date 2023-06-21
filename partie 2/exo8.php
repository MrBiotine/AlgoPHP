<h1>VIII. Exercice 8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);</p>
<h2>Résultat</h2>

<?php
//lien de l'image
$url = "http://my.mobirise.com/data/userpic/764.jpg";
//nombre de répétition de l'affichage 
$nb = 4;


function repeterImage($url, $nb){
    for($i=0;$i<$nb;$i++){
        echo "<img src='".$url."'/>";
    }
}

repeterImage($url,$nb);


?>