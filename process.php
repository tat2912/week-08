<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'TranAnhTuan' && $password == 'SWD00440') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>
