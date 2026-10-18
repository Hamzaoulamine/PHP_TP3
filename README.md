# TP 3 PHP : Mini-application « Suivi des notes des apprenants »

**Nom :** OULAMINE  
**Prénom :** Hamza  
**Groupe :** G4  
**Date :** 18/10/2026  

---

## Description du projet
Ce dépôt contient le code source de la mini-application web de suivi des notes des apprenants développée dans le cadre du TP 3 PHP.

---

## Réponses aux questions théoriques du TP

### Partie 1 : Variables et Constantes
- **Affichage d'une constante non définie :** Tenter d'afficher une constante non définie (ex: `echo INCONNUE;`) déclenche une erreur PHP (`Error: Undefined constant`).
- **Différence entre `const` et `define()` :**
  - `const` est évalué lors de la compilation (ne peut pas être utilisé dans des blocs conditionnels `if`).
  - `define()` est évalué à l'exécution (peut être utilisé dans des instructions conditionnelles).

### Partie 2 : Structures de contrôle
- **Oubli du `break` dans un `switch` :** Si `break` est omis, PHP continue d'exécuter les `case` suivants sans vérifier leurs conditions (comportement de *fall-through*).
- **Différence entre `while` et `do-while` :**
  - `while` évalue la condition **avant** l'exécution du bloc (0 exécution possible).
  - `do-while` exécute le bloc **au moins une fois** avant d'évaluer la condition.

### Partie 3 : Tableaux
- **Tri d'un tableau indexé :** Pour trier un tableau indexé comme `$modules`, on utilise `sort()` ou `rsort()`.
- **Opérateurs de tableaux (`$a + $b`, `$a == $b`, `$a === $b`) :**
  - `$a + $b` : Union des deux tableaux (conserve les clés du premier tableau `$a` sans les écraser).
  - `$a == $b` : Retourne `true` si les deux tableaux contiennent les mêmes paires clé/valeur.
  - `$a === $b` : Retourne `false` si l'ordre des paires clé/valeur ou leurs types diffèrent.

### Partie 4 : Formulaires et Fichiers
- **Pourquoi préférer `POST` à `GET` pour un mot de passe ?**  
  Car `GET` transmet les données de manière visible dans l'URL (conservées dans l'historique et les logs), alors que `POST` transmet les données dans le corps de la requête HTTP.
- **Contenu de `$_REQUEST` :** C'est un tableau superglobal contenant les données de `$_GET`, `$_POST` et `$_COOKIE`.

### Partie 5 : Fichiers CSV et JSON
- **Mode `"w"` vs `"a"` dans `fopen()` :** Le mode `"w"` écrase le contenu du fichier à chaque ouverture, alors que le mode `"a"` ajoute les nouvelles lignes à la fin du fichier.
- **Format exploitable par JavaScript :** Le format **JSON** (`json_encode`) est directement exploitable par JavaScript.

### Partie 6 : Sessions et Cookies
- **Stockage :** La session est stockée côté **serveur**, tandis que le cookie est stocké côté **client (navigateur)**.
- **Appel de `setcookie()` et `header()` :** Ils doivent être appelés avant tout affichage HTML car ils envoient des en-têtes HTTP (headers) qui doivent précéder le corps de la réponse.
