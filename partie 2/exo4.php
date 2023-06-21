<h1>IV. Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>
<h2>Résultat</h2>


<style>
table, td {
  border: 1px solid;
  padding: 10px;
}
th{
    font-size: 1.2em;
    border: 1px solid;
    padding: 10px;
}
table {          
  border-collapse: collapse;
  width: auto;
}
</style>

<?php
/*
Déclarer les intitulés des colonnes dans $col, le tableau dans $array
*/

function afficherTableHTML($cols, $array){
    asort($array); //trie $array de A-> Z selon la valeur (ici : les capitales)
    $cols = explode(',', $cols);
    $data = '<table><tr>';
    foreach($cols as $v){
        $data.= '<th>'.$v.'</th>';
    }
    $data.= '</tr>';
    foreach($array as $pays=>$capitale) {
        $data.='<tr>
                    <td>'. mb_strtoupper($pays).'</td>'.'
                    <td>'.$capitale.'</td>'.'
                    <td><a href="https://fr.wikipedia.org/wiki/'. $capitale .' "title="Lien vers la page Wikipédia de ' . $capitale . ' " target="_blank"> Lien</a></td>'.'
                </tr>';
    }        
    $data.= '</table>';
    echo $data;
}

$col = 'Pays,Capitale,Liens Wiki';
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");    
afficherTableHTML($col, $capitales);
?>