<?php
$nom = 'Doe';
$prenom = 'John';
$note1 = 10;
$note2 = 15;
$moyenne = ($note1 + $note2) / 2;
//echo 'Bonjour ' . $nom . ' ' . $prenom . ' vous avez eu ' . (($note1 + $note2) / 2) . ' de moyenne';
//echo "\nBonjour $nom $prenom vous avez eu $moyenne de moyenne";
$notes = [18, 67, 'eleve', 64, 8, 'Marc', 4, 90];
//echo $notes[2];
$eleve = ['Marc', 'Doe', [10, 20, 8, 7]];
//echo $eleve[2][3];
$note = readline('Entrez votre note: ');
if ($note >= 10) {
echo 'Bravo vous avez la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}