<?php

// ================= DATABASE CONNECTION =================
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS myDatabase");
mysqli_select_db($conn, "myDatabase");

// Create table
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS student_result (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    total INT,
    average FLOAT
)");

// ================= SUPERGLOBAL INPUT =================
$name = $_POST['name'] ?? "Guest";

// ================= INDEXED ARRAY =================
$marks = [85, 67, 45, 90, 55];

echo "<h3>Marks List:</h3>";
foreach ($marks as $m) {
    echo $m . "<br>";
}

// ================= USER DEFINED FUNCTION =================
function avg($total, $count) {
    return (float)$total / $count;
}

// ================= CALCULATIONS =================
$total = 0;
$max = $marks[0];
$min = $marks[0];
$pass = 0;
$fail = 0;

foreach ($marks as $m) {
    $total += $m;

    if ($m > $max) $max = $m;
    if ($m < $min) $min = $m;

    if ($m >= 50) $pass++;
    else $fail++;
}

$average = avg($total, count($marks));

// built-in function
sort($marks);

// ================= ASSOCIATIVE ARRAY =================
$student = [
    "name" => $name,
    "id" => "221-35-001",
    "cgpa" => 3.80
];

// ================= STRING OPERATIONS =================
echo "<h3>String Operations:</h3>";
echo "Uppercase Name: " . strtoupper($name) . "<br>";
echo "Name Length: " . strlen($name) . "<br>";

// ================= OUTPUT =================
echo "<h3>Result:</h3>";
echo "Total: $total <br>";
echo "Average: $average <br>";
echo "Max: $max <br>";
echo "Min: $min <br>";
echo "Pass: $pass <br>";
echo "Fail: $fail <br>";

// associative array print
echo "<h3>Student Info:</h3>";
foreach ($student as $key => $value) {
    echo "$key : $value <br>";
}

// ================= SAVE TO DATABASE =================
if ($name != "Guest") {
    mysqli_query($conn,
        "INSERT INTO student_result (name, total, average)
        VALUES ('$name', $total, $average)"
    );
}

?>

<!-- ================= FORM ================= -->
<form method="POST">
    Enter Student Name:
    <input type="text" name="name" required>
    <button type="submit">Submit</button>
</form>