<?php
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

$fichierCSV = __DIR__ . '/data/notes.csv';
$donnees = [];

if (file_exists($fichierCSV)) {
    $f = fopen($fichierCSV, 'r');
    while (($ligne = fgetcsv($f, 1000, ';')) !== FALSE) {
        if (count($ligne) >= 3) {
            $info = (float)$ligne[1];
            $math = (float)$ligne[2];
            $donnees[] = [[cite: 23]
                'nom' => $ligne[0],[cite: 23]
                'notes' => ['info' => $info, 'math' => $math],[cite: 23]
                'moyenne' => ($info + $math) / 2[cite: 23]
            ];
        }
    }
    fclose($f);
}

$fichierJSON = __DIR__ . '/data/notes.json';
file_put_contents($fichierJSON, json_encode($donnees, JSON_PRETTY_PRINT));[cite: 23]

echo "<h2>Export JSON et Sérialisation</h2>";

$jsonLu = file_get_contents($fichierJSON);[cite: 23]
$donneesDecodees = json_decode($jsonLu, true);[cite: 23]

echo "<h3>Résultat json_decode() (print_r) :</h3><pre>";
print_r($donneesDecodees);[cite: 23]
echo "</pre>";

echo "<h3>Résultat serialize() :</h3><pre>" . htmlspecialchars(serialize($donnees)) . "</pre>";[cite: 23]

require_once 'includes/pied_inc.php';
?>
