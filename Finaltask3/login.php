<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "myDatabase");

$email_cookie = $_COOKIE['email'] ?? "";
?>

<h2>Login Page</h2>

<form method="POST">
    Email: <input type="email" name="email" value="<?php echo $email_cookie; ?>"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        // SESSION
        $_SESSION['user'] = $user['name'];

        // COOKIE
        setcookie("email", $email, time() + 86400);

        // REDIRECT
        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid Login";
    }
}
?>