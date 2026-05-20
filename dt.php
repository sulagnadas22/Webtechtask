<?php
header("Content-Type: application/json");

$data = [
    "name" => "Katha",
    "age" => 29,
    "city" => "Bogura"
];

echo json_encode($data);
?>