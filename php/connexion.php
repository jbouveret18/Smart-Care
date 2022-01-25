<?php
    $servername = "localhost";
    $username = "root"; //Créer un nouvel utilisateur
    $password = ""; // Mot de passe du nouvel utilisateur
    $dbname = "app";
    // Create connection
    global $conn;
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>