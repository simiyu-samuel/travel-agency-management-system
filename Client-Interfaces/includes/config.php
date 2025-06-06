<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Optional: redirect to login if not logged in
if (!isset($_SESSION['client_email'])) {
    header("Location: client-login.php");
    exit();
}
?>
