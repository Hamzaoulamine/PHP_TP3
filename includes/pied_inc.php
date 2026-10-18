<?php
/**
 * Auteur : Hamza Oulamine (G4)
 * Objectif : Pied de page et affichage des dates (Exercice 6.3)
 * Date : 18/10/2026
 */

$dateDuJour = date("d/m/Y");

$dateAujourdhui = new DateTime();
$finSemestre = new DateTime('2026-12-31');
$intervalle = $dateAujourdhui->diff($finSemestre);
$joursRestants = $intervalle->days;

$testDate = checkdate(10, 18, 2026) ? "Date valide" : "Date invalide";
?>
<hr>
<footer>
    <p>Date du jour : <?= $dateDuJour ?> | Jours restants avant fin de semestre : <?= $joursRestants ?> jours (<?= $testDate ?>)</p>
    <p>&copy; 2026 - Tous droits réservés - Hamza Oulamine (Groupe G4)</p>
</footer>
</body>
</html>
