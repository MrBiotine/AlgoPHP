<h1></h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>
<h2>Résultat</h2>


<?php

$dateSample="2018-02-23";

function displayDateEng(string $date){
    $newdate = new DateTime($date);
    echo"Affichage en anglais : " ;
    echo $newdate->format('l d F Y');
}

function formaterDateFr(string $date){

    $semaine = array(" Dimanche "," Lundi "," Mardi "," Mercredi "," Jeudi ",
                " Vendredi "," Samedi ");
    $mois =array(1=>" janvier "," février "," mars "," avril "," mai "," juin ",
                " juillet "," août "," septembre "," octobre "," novembre "," décembre ");

    $time = strtotime($date); //convertit la date en numérique (int timestamp)
    echo "Affichage en français : " ; 
    echo $semaine[date('w',$time)] ," ",date('j',$time),"", $mois[date('n',$time)], date('Y',$time)," ";
}

 displayDateEng($dateSample);
 echo "<br>-------------------------------------------------------<br>";
 formaterDateFr($dateSample);

?>