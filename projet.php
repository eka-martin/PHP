<?php
//les prenoms et les notes
/* $nom = 'Doe';
$prenom = 'John';
$note1 = 10;
$note2 = 15;
$moyenne = ($note1 + $note2) / 2; */
//echo 'Bonjour ' . $nom . ' ' . $prenom . ' vous avez eu ' . (($note1 + $note2) / 2) . ' de moyenne';
//echo "\nBonjour $nom $prenom vous avez eu $moyenne de moyenne";

//les notes d'eleves
//$notes = [18, 67, 'eleve', 64, 8, 'Marc', 4, 90];
//echo $notes[2];
//$eleve = ['Marc', 'Doe', [10, 20, 8, 7]];
//echo $eleve[2][3];
/*$note = readline('Entrez votre note: ');
if ($note >= 10) {
echo 'Bravo vous avez la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}
*/

//les actions de jeu
/* $action = (int)readline('Entrez votre action : (1 - attaquer, 2 - defendre, 3 - passer mon tour)');
switch ($action) {
    case 1:
        echo 'J\'attaque !';
        break;

    case 2: 
        echo 'Je defends !';
        break;

    case 3: 
        echo 'Je ne fais rien !';
        break;

    default:
        echo 'Commande inconnue';
} */

//les horaires de magasin
/* $heure = (int)readline('Entrez une heure : ');
if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
echo 'Le magasin est ouvert';
} else {
    echo 'Le magasin est fermé';
} */

//--------------THE LOOPS--------------------

/* $chiffre = null;
while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrez une valeur: ');
}
echo 'Bravo vous avez gagné!'; */

/* for ($i = 0; $i < 10; $i++) {
    echo "- $i \n";
}
 */

 $notes = [8, 12, 16];
 $eleves = [
    'cm1' => ['Marc', 'Jean', 'Claude', 'Guillaume', 'Anne'],
    'cm2' => ['John', 'Cathrine', 'Isabelle', 'François']
 ];
 
 for ($i = 0; $i < 3; $i++) {
    echo "- ". $notes[$i]. "\n";
}
//meuilleur solution

foreach ($notes as $note) {
    echo "- $note \n";
}

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach ($listEleves as $eleve) {
        echo " - $eleve \n";
    }
    echo " \n";
}