<?php


require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

function mention_locale($note) {
    if ($note >= 16) return "Très bien";
    elseif ($note >= 14) return "Bien";
    elseif ($note >= 12) return "Assez bien";
    elseif ($note >= SEUIL) return "Passable";
    else return "Ajourné";
}

$fichier = __DIR__ . '/data/notes.csv';

echo "<h2>Liste des apprenants (CSV)</h2>";

if (!file_exists($fichier)) {
    echo "<p class='erreur'>Le fichier notes.csv n'existe pas encore.</p>";
} else {
    $f = fopen($fichier, 'r');
    if (!$f) {
        echo "<p class='erreur'>Erreur lors de l'ouverture du fichier.</p>";
        exit;
    }

    echo "<table><tr><th>Nom</th><th>Info</th><th>Math</th><th>Moyenne</th><th>Mention</th></tr>";
    
    $total = 0; $count = 0;
    while (($ligne = fgetcsv($f, 1000, ';')) !== FALSE) {
        if (count($ligne) >= 3) {
            $nom = htmlspecialchars($ligne[0]);
            $info = (float)$ligne[1];
            $math = (float)$ligne[2];
            $moyenne = ($info + $math) / 2;
            $total += $moyenne; $count++;
            
            echo "<tr><td>$nom</td><td>$info</td><td>$math</td><td><b>$moyenne</b></td><td>" . mention_locale($moyenne) . "</td></tr>";
        }
    }
    fclose($f);
    echo "</table>";

    if ($count > 0) {
        echo "<h3>Moyenne générale de la classe : " . round($total / $count, 2) . " / 20</h3>";
    }
}

require_once 'includes/pied_inc.php';
?>
