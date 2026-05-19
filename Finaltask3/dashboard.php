<?php
session_start();


if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Dashboard</h2>

<h3>Welcome, <?php echo $_SESSION['user']; ?> 🎉</h3>

<?php

if (isset($_COOKIE['email'])) {
    echo "Logged in email: " . $_COOKIE['email'] . "<br>";
}

if (isset($_COOKIE['last_login'])) {
    echo "Last Login Time: " . $_COOKIE['last_login'];
}
?>

<br><br>

<a href="logout.php">Logout</a>