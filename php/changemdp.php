<?php
    include 'connexion.php';
    session_start();
    $_pass1 = password_hash(htmlspecialchars($_POST["password"], ENT_COMPAT,'ISO-8859-1', true),PASSWORD_DEFAULT);
    $_pass2 = htmlspecialchars($_POST["password2"], ENT_COMPAT,'ISO-8859-1', true);

    if (password_verify($_pass2,$_pass1)){
        $sql = "UPDATE utilisateur SET Password = '$_pass1' WHERE id =$_SESSION[id]";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "app";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header('Location: ../account.php?result=1');
        } 
        } else {
        header('Location: ../account.php?result=0');
    }
?>