<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app";

    $_mail = htmlspecialchars($_POST["mail"], ENT_COMPAT,'ISO-8859-1', true);
    $_pass1 = password_hash(htmlspecialchars($_POST["password"], ENT_COMPAT,'ISO-8859-1', true),PASSWORD_DEFAULT);
    $_pass2 = htmlspecialchars($_POST["password2"], ENT_COMPAT,'ISO-8859-1', true);
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT Mail FROM utilisateur WHERE MAIL = '$_mail';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: ../login.php?error=1");
    } else {
        if (password_verify($_pass2,$_pass1)){
            session_start();
            $_SESSION['mail'] = $_mail;
            $_SESSION['pass'] = $_pass1;
            header('Location: ../register2.php');
        } else {
            header('Location: ../login.php?error=2');
        }
    }
?>