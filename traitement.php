<?php

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom'], $_POST['note_info'], $_POST['note_math']) &&[cite: 22]
        !empty(trim($_POST['nom'])) && $_POST['note_info'] !== '' && $_POST['note_math'] !== '') {[cite: 22]
        
        $nom = htmlspecialchars(trim($_POST['nom']));[cite: 22]
        $note_info = (float)$_POST['note_info'];
        $note_math = (float)$_POST['note_math'];

        if ($note_info >= NOTE_MIN && $note_info <= NOTE_MAX &&[cite: 22]
            $note_math >= NOTE_MIN && $note_math <= NOTE_MAX) {[cite: 22]

            $moyenne = ($note_info + $note_math) / 2;
            echo "<p class='succes'>Récapitulatif : Apprenant $nom | Info : $note_info | Math : $note_math | Moyenne : $moyenne</p>";[cite: 22]

            $dossierData = __DIR__ . '/data';
            if (!is_dir($dossierData)) mkdir($dossierData, 0777, true);

            $f = fopen($dossierData . '/notes.csv', 'a');[cite: 23]
            if ($f) {
                fputcsv($f, [$nom, $note_info, $note_math], ';');[cite: 23]
                fclose($f);[cite: 23]
                echo "<p class='succes'>Données enregistrées dans notes.csv !</p>";
            }
        } else {
            echo "<p class='erreur'>Erreur : Les notes doivent être comprises entre " . NOTE_MIN . " et " . NOTE_MAX . ".</p>";[cite: 22]
        }
    } else {
        echo "<p class='erreur'>Erreur : Tous les champs sont obligatoires.</p>";[cite: 22]
    }
}

require_once 'includes/pied_inc.php';
?>
