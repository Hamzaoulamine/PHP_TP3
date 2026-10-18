<?php
/**
 * Auteur : Hamza Oulamine (G4)
 * Objectif : Traitement du formulaire GET (Exercice 4.2)
 * Date : 18/10/2026
 */

require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

$nom = isset($_GET['nom']) ? htmlspecialchars($_GET['nom']) : '';
$prenom = isset($_GET['prenom']) ? htmlspecialchars($_GET['prenom']) : '';
$sexe = isset($_GET['sexe']) ? $_GET['sexe'] : 'M';

$titre = ($sexe === 'F') ? "Bonjour Madame" : "Bonjour Monsieur";
echo "<h2>$titre $prenom $nom</h2>";

require_once 'includes/pied_inc.php';
?>
