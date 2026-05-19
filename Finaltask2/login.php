<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // simple check (demo purpose)
    if ($username == "admin" && $password == "1234") {

        $_SESSION['user'] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid username or password";
    }
}
?>

<h2>Login Page</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="login">Login</button>
</form>