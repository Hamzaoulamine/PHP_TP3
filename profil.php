<?php
session_start();[cite: 24]
if (!isset($_SESSION['login'])) {[cite: 24]
    header("Location: login.php");[cite: 24]
    exit;[cite: 24]
}

require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

echo "<h2>Bienvenue " . htmlspecialchars($_SESSION['login']) . " !</h2>";[cite: 24]
echo "<p>Vous êtes connecté à votre profil.</p>";
echo "<p><a href='deconnexion.php'>Déconnexion</a></p>";[cite: 24]
require_once 'includes/pied_inc.php';
?>
