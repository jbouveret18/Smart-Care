<?php
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
    $passCheck = htmlspecialchars($_POST["password"], ENT_COMPAT,'ISO-8859-1', true);
    $mail = htmlspecialchars($_POST["mail"], ENT_COMPAT,'ISO-8859-1', true);
    $sql= "SELECT Password,id,nom,prenom FROM utilisateur WHERE Mail='$mail';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_passHash = mysqli_fetch_assoc($result);
        if (password_verify($passCheck,$_passHash['Password'])) {
            session_start();
            $_SESSION['connected']=TRUE;
            $_SESSION['mail'] = $mail;
            $_SESSION['id'] = $_passHash['id'];
            $_SESSION['nom'] = $_passHash['nom'];
            $_SESSION['prenom'] = $_passHash['prenom'];
            $conn->close();
            header('Location: ../index.php');
        } else {
            $conn->close();
            header('Location: ../login.php?error=3');
        }
    } else {
        $conn->close();
        header('Location: ../login.php?error=4');
    }

?>