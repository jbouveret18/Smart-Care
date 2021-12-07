<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "app";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $passCheck = $_POST["password"] ;
    $mail = $_POST["mail"];
    $sql= "SELECT Password FROM utilisateur WHERE Mail='$mail';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo("<p>bravo</p>");
        $_passHash = mysqli_fetch_assoc($result);
        if (password_verify($passCheck,$_passHash['Password'])) {
            echo("Connecté");
        } else {
            header('Location: login.php?error=3');
        }
    } else {
        header('Location: login.php?error=4');
    }

?>