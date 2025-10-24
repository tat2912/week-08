<?php
$pageTitle = 'Login';
include 'header.inc';
?>

<h1>Login</h1>

<?php
if (isset($_GET['error'])) {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="TSWD00440">
    <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>
