<?php
$conn = new mysqli("localhost", "root", "", "testdb");

$username = $_GET['username'] ?? '';
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Username not available";
} else {
    echo "Username available";
}
