<?php

require_once 'config.php';
require_once 'includes/entete_inc.php';[cite: 22]
require_once 'includes/menu_inc.php';[cite: 22]

if (!function_exists('mention')) {
    function mention($note) {
        if ($note >= 16) return "Très bien";
        elseif ($note >= 14) return "Bien";
        elseif ($note >= 12) return "Assez bien";
        elseif ($note >= SEUIL) return "Passable";
        else return "Ajourné";
    }
}

echo "<h2>Partie 3 : Tableaux</h2>";

$notes = [[cite: 21]
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,[cite: 21]
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,[cite: 21]
    "Hamza" => 7, "Sami" => 7, "Noura" => 14[cite: 21]
];

$modules = ["PHP", "HTML/CSS", "JavaScript"];[cite: 21]

echo "<b>Modules (foreach) :</b> ";
foreach ($modules as $m) echo "$m ";[cite: 21]
echo "<br><b>Modules (indices) :</b> $modules[0], $modules[1], $modules[2]<br><br>";[cite: 21]

echo "<h3>Exercice 3.2 : Liste des apprenants</h3>";
echo "<table><tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";[cite: 21]
foreach ($notes as $nom => $note) {[cite: 21]
    $style = ($note < SEUIL) ? "style='color:red;'" : "";[cite: 21]
    echo "<tr $style><td>$nom</td><td>$note</td><td>" . mention($note) . "</td></tr>";[cite: 21]
}
echo "</table>";

$somme = 0; $nb = 0; $max = -1; $min = 101;
foreach ($notes as $n) {[cite: 21]
    $somme += $n; $nb++;[cite: 21]
    if ($n > $max) $max = $n;[cite: 21]
    if ($n < $min) $min = $n;[cite: 21]
}

echo "<h3>Exercice 3.3 : Statistiques</h3>";
echo "Somme : $somme | Moyenne : " . round($somme / $nb, 2) . " | Max : $max | Min : $min<br>";[cite: 21]
echo "Vérification native -> array_sum : " . array_sum($notes) . " | count : " . count($notes) . " | max : " . max($notes) . " | min : " . min($notes) . "<br>";[cite: 21]

$effectifs = ["Très bien" => 0, "Bien" => 0, "Assez bien" => 0, "Passable" => 0, "Ajourné" => 0];[cite: 21]
foreach ($notes as $n) {
    $effectifs[mention($n)]++;
}

echo "<br><b>Effectifs par mention :</b><br>";
foreach ($effectifs as $m => $eff) {
    echo "$m : $eff<br>";
}
function afficher($tab) {[cite: 21]
    echo "<table><tr><th>Nom</th><th>Note</th></tr>";
    foreach ($tab as $nom => $note) echo "<tr><td>$nom</td><td>$note</td></tr>";
    echo "</table>";
}

echo "<h3>1. Noms croissants (ksort)</h3>";[cite: 21]
$t1 = $notes; ksort($t1); afficher($t1);[cite: 21]

echo "<h3>2. Notes décroissantes (arsort)</h3>";[cite: 21]
$t2 = $notes; arsort($t2); afficher($t2);[cite: 21]

echo "<h3>3. Noms décroissants (krsort)</h3>";[cite: 21]
$t3 = $notes; krsort($t3); afficher($t3);[cite: 21]

echo "<h3>4. Notes croissantes (asort)</h3>";[cite: 21]
$t4 = $notes; asort($t4); afficher($t4);[cite: 21]


$a = ["x" => 1, "y" => 2];[cite: 22]
$b = ["y" => 2, "x" => 1];[cite: 22]

echo "<h3>Exercice 3.5 : Opérateurs de tableaux</h3>";
echo "\$a + \$b : "; var_dump($a + $b); echo "<br>";[cite: 22]
echo "\$a == \$b : "; var_dump($a == $b); echo "<br>";[cite: 22]
echo "\$a === \$b : "; var_dump($a === $b); echo "<br>";[cite: 22]

require_once 'includes/pied_inc.php';[cite: 22]
?>
