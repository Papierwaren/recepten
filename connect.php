<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "recepten";

// Verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleert de verbinding
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}
?>