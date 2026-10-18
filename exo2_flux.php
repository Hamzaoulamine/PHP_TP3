<?php


require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

function mention($note) {[cite: 19]
    if ($note >= 16) return "Très bien";[cite: 20]
    elseif ($note >= 14) return "Bien";[cite: 20]
    elseif ($note >= 12) return "Assez bien";[cite: 20]
    elseif ($note >= SEUIL) return "Passable";[cite: 20]
    else return "Ajourné";[cite: 20]
}

echo "<h2>Partie 2 : Structures de contrôle et boucles</h2>";

echo "<h3>Exercice 2.1 : Tests de mentions</h3>";
foreach ([18, 15, 13, 10, 7] as $n) {[cite: 20]
    echo "Note : $n => Mention : " . mention($n) . "<br>";
}

// Question 2.2 :
 
echo "<h3>Exercice 2.2 : Switch et Mois</h3>";
$mois = date("m");[cite: 20]
switch ((int)$mois) {
    case 1: echo "Janvier"; break;[cite: 20]
    case 2: echo "Février"; break;[cite: 20]
    case 3: echo "Mars"; break;[cite: 20]
    case 4: echo "Avril"; break;[cite: 20]
    case 5: echo "Mai"; break;[cite: 20]
    case 6: echo "Juin"; break;[cite: 20]
    case 7: echo "Juillet"; break;[cite: 20]
    case 8: echo "Août"; break;[cite: 20]
    case 9: echo "Septembre"; break;[cite: 20]
    case 10: echo "Octobre"; break;[cite: 20]
    case 11: echo "Novembre"; break;[cite: 20]
    case 12: echo "Décembre"; break;[cite: 20]
    default: echo "Mois invalide"; break;[cite: 20]
}

// Question 2.3  :

echo "<h3>Exercice 2.3 : Boucles</h3>";

echo "<b>1. Triangle d'étoiles :</b><br>";
for ($i = 1; $i <= 6; $i++) {[cite: 20]
    for ($j = 1; $j <= $i; $j++) echo "*";[cite: 20]
    echo "<br>";
}

echo "<br><b>2. Nombres pairs de 0 à 20 (while) :</b><br>";
$val = 0;[cite: 20]
while ($val <= 20) {[cite: 20]
    echo ($val == 10) ? "<b>10</b> " : "$val ";[cite: 20]
    $val += 2;[cite: 20]
}

echo "<br><br><b>3. Nombres pairs de 0 à 10 (for et continue) :</b><br>";
for ($k = 0; $k <= 10; $k++) {[cite: 20]
    if ($k % 2 != 0) continue;[cite: 20]
    echo "$k ";
}

echo "<br><br><b>4. Parcours avec switch et break 2 :</b><br>";
for ($i = 1; $i <= 15; $i++) {[cite: 20]
    switch ($i) {[cite: 20]
        case 5:
            echo "At 5 <br>";[cite: 20]
            break; 
        case 10:
            echo "At 10; quitting<br>";[cite: 20]
            break 2; 
    }
}

echo "<br><b>5. Reprise de la Q2 avec do-while :</b><br>";
$v = 0;
do {
    echo ($v == 10) ? "<b>10</b> " : "$v ";
    $v += 2;
} while ($v <= 20);[cite: 20]

require_once 'includes/pied_inc.php';
?>
