<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "recepten";

// Maak een verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

// Voer hier je query's uit of voer andere databasebewerkingen uit

// Sluit de verbinding
$conn->close();
?>