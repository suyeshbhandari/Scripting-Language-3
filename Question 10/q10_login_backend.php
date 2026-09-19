<?php
$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';

if ($userid === "admin" && $password === "admin123") {
    echo "success";
} else {
    echo "fail";
}
