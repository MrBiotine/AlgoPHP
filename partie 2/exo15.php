<h1>XV. Exercice 15</h1>
<p>En utilisant les ressources de la page <a>http://php.net/manual/fr/book.filter.php'</a>, vérifier si une adresse e-mail a le bon format.</p>
<h2>Résultat</h2>

<?php

$mail_1 = "elan@elan-formation.fr";
$mail_2 = "contact@elan";

function checkMail ($mail) {
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse " . $mail . " est une adresse e-mail valide.<br>";
}else{
    echo "L'adresse " . $mail . " est une adresse e-mail invalide.<br>";
}

}

checkMail($mail_1);
checkMail($mail_2);

?>

