<?php
session_start();
if (isset($_SESSION['user'])) {
    $pageTitle = 'Welcome';
    include 'header.inc';
    echo "Welcome, " . $_SESSION['user'];
    include 'footer.inc';
} else {
    header('Location: login.php');
}
?>
