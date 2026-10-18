<?php
session_start();[cite: 24]

if (isset($_SESSION['login'])) {
    header("Location: profil.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['login']))) {
    $login = trim($_POST['login']);
    $_SESSION['login'] = $login;[cite: 24]

    setcookie("dernier_login", $login, time() + 86400, "/");[cite: 24]

    header("Location: profil.php");[cite: 24]
    exit;[cite: 24]
}

require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';
?>

<h2>Connexion</h2>
<form action="login.php" method="POST">
    <label>Login :</label> 
    <input type="text" name="login" value="<?= isset($_COOKIE['dernier_login']) ? htmlspecialchars($_COOKIE['dernier_login']) : 'Hamza' ?>" required><br><br>[cite: 24]
    <button type="submit">Se connecter</button>
</form>

<?php require_once 'includes/pied_inc.php'; ?>
