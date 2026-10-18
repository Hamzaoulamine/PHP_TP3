<?php

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

echo "<h2>Partie 1 : Variables, Constantes, Types et Chaînes</h2>";


// * Exercice 1.1 
$x = 10;
$_x = 20;
$Prix_HT = 100;
$état = "OK";

$a = "Minuscule";
$A = "Majuscule";
echo "<p>\$a = $a et \$A = $A (Variables distinctes)</p>";

// Exercice 1.2
echo "<h3>Exercice 1.2 : Constantes</h3>";
echo "Établissement : " . ETABLISSEMENT . "<br>";[cite: 18]
echo "NOTE_MIN : " . NOTE_MIN . " | NOTE_MAX : " . NOTE_MAX . " | SEUIL : " . SEUIL . "<br>";[cite: 18]
echo "defined('SEUIL') : " . (defined('SEUIL') ? "true" : "false") . "<br>";[cite: 18]
echo "defined('INCONNUE') : " . (defined('INCONNUE') ? "true" : "false") . "<br>";[cite: 18]

// Exercice 1.3
echo "<h3>Exercice 1.3 : Calcul TTC</h3>";
$prix_ht = 60;[cite: 19]
$tva = 20;[cite: 19]
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de $prix_ttc €.<br>";[cite: 19]

// Exercice 1.4 
echo "<h3>Exercice 1.4 : Types et conversions</h3>";
$test = 42;[cite: 19]
$test = (string)$test;[cite: 19]
var_dump($test);[cite: 19]
echo "<br><br>";

echo "<b>Tests booléens :</b><br>";
var_dump((bool)0, (bool)0.0, (bool)"0", (bool)"", (bool)"abc", (bool)[], (bool)null);[cite: 19]
echo "<br><br>";

echo "<b>Tests numériques :</b><br>";
var_dump((int)3.9, (int)"12abc", (float)"1.5e3", (int)true);[cite: 19]
echo "<br><br>";

$d = 255;       
$h = 0xFF;      
$o = 0377;      
$b = 0b11111111;
echo "Décimal : $d | Hexadécimal : $h | Octal : $o | Binaire : $b<br>";[cite: 19]

// Exercice 1.5 : 
echo "<h3>Exercice 1.5 : Chaînes de caractères</h3>";
$traitees = "égales à";[cite: 19]
$ici = 2;[cite: 19]

echo "1. Ahmed a dit : \"J'ai réussi\"<br>";[cite: 19]
echo '2. Voulez-vous supprimer C:\*.*?<br>';[cite: 19]
echo '3. Ceci n\'affichera pas \n de nouvelle ligne<br>';[cite: 19]
echo '4. Les variables ne seront pas $traitees $ici<br>';[cite: 19]
echo "5. Les variables seront $traitees $ici<br>";[cite: 19]

$chaine = "*Bonjour les développeurs*";[cite: 19]
echo "<br>Nettoyage trim() : " . trim($chaine, "*") . "<br>";[cite: 19]

echo "Affichage lettre par lettre :<br>";
$mot = "PHP";
for ($i = 0; $i < strlen($mot); $i++) {[cite: 19]
    echo $mot[$i] . "<br>";
}

require_once 'includes/pied_inc.php';
?>
