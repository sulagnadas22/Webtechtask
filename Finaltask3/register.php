<?php
$conn = mysqli_connect("localhost", "root", "", "myDatabase");

if (!$conn) {
    die("Connection failed");
}

echo "DB Connected <br>";
?>

<h2>Registration Page</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="register">Register</button>
</form>

<?php

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>