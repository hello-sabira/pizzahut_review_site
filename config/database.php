<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'test');
define('DB_PASS', 'Boost12334');
define('DB_NAME', 'ph_reviews');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully';
?>