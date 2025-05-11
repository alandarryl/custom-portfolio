<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "custom_portfolio";
// Create connection

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}