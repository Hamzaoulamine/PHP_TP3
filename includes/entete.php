<?php
/**
 * Auteur : Hamza Oulamine (G4)
 * Objectif : En-tête HTML réutilisable (Exercice 4.1)
 * Date : 18/10/2026
 */
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= ETABLISSEMENT ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 60%; margin-top: 10px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .erreur { color: red; font-weight: bold; }
        .succes { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1><?= ETABLISSEMENT ?></h1>
