<?php
$host = 'localhost';
$port = '3306';
$db = 'login_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
