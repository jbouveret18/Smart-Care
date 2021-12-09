<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "app";

    $_mail = $_POST["mail"];
    $_pass1 = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $_pass2 = $_POST["password2"];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT Mail FROM utilisateur WHERE MAIL = '$_mail';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo("<p>L'adresse mail existe déjà</p>");
        header("Location: login.php?error=1");
    } else {
        echo("<p>L'adresse mail n'existe pas</p>");
        if (password_verify($_pass2,$_pass1)){
            session_start();
            $_SESSION['mail'] = $_mail;
            $_SESSION['pass'] = $_pass1;
            header('Location: register.php');
        } else {
            header('Location: login.php?error=2');
        }
    }
?>