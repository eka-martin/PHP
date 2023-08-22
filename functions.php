<?php
//-------PALYNDROME-----

/* $mot = readline('Veuillez entrer un mot: ');
$reverse = strtolower(strrev($mot));
if (strtolower($mot) === $reverse) {
    echo "Ce mot est un palyndrome \n";
} else {
    echo "Ce mot n\'est pas un palyndrome \n";
} */

//-----MOYENNe-----

/* $notes = [12, 6, 9, 11, 20, 16];
$sum = array_sum($notes);
$count = count($notes);
echo "Vous avez " . round($sum / $count, 2) . " de moyenne"; */

//-----USER'S FUNCTION----------
/* function bonjour ($prenom) {
    return "Bonjour " . $prenom . "!" . "\n";
}

$salutation = bonjour('Jean');
echo $salutation; */

//--------OUI/NON-------------
function repondre_oui_non ($phrase) {
    while (true) {
        $reponse = readline($phrase . " - o(ui)/n(on)");
        if ($reponse === 'o') {
            return true;
        } elseif ($reponse === 'n') {
            return false;
        }
    }
    
}

$resultat = repondre_oui_non('Voulez vous continuer?');
var_dump($resultat);