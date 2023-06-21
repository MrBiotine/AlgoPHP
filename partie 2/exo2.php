<h1>II. Exercice 2</h1>
<p>Soit le tableau suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>
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
        ksort($array); //trie $array de A-> Z selon la cle (ici : Pays)
        $cols = explode(',', $cols);
        $data = '<table><tr>';
        foreach($cols as $v){
            $data.= '<th>'.$v.'</th>';
        }
        $data.= '</tr>';
        foreach($array as $key=>$value) {
            $data.='<tr><td>'. mb_strtoupper($key).'</td>'.'<td>'.$value.'</td></tr>';
        }        
        $data.= '</table>';
        echo $data;
    }

    $col = 'Pays,Capitale';
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");    
    afficherTableHTML($col, $capitales);
?>