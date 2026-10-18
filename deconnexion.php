<?php
session_start();
session_unset();[cite: 24]
session_destroy();[cite: 24]

header("Location: login.php");[cite: 24]
exit;
?>
