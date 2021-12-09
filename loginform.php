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
    $sql= "SELECT Password,id,nom,prenom FROM utilisateur WHERE Mail='$mail';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_passHash = mysqli_fetch_assoc($result);
        if (password_verify($passCheck,$_passHash['Password'])) {
            echo("Connecté, user_id:$_passHash[id], nom:$_passHash[nom], prenom:$_passHash[prenom]");
            session_start();
            $_SESSION['connected']=TRUE;
            $_SESSION['mail'] = $mail;
            $_SESSION['id'] = $_passHash[id];
            $_SESSION['nom'] = $_passHash[nom];
            $_SESSION['prenom'] = $_passHash[prenom];
            header('Location: index.php');
        } else {
            header('Location: login.php?error=3');
        }
    } else {
        header('Location: login.php?error=4');
    }

?>