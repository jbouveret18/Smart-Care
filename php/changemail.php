<?php
    session_start();
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

    $sql= "SELECT Password FROM utilisateur WHERE id=$_SESSION[id];";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_passHash = mysqli_fetch_assoc($result);
        if (password_verify($passCheck,$_passHash['Password'])) {

            $checkmail= "SELECT Password FROM utilisateur WHERE Mail='$mail';";
            $resultmail = $conn->query($checkmail);
            if ($resultmail->num_rows > 0) {
                //Adresse mail déjà utilisé
                header('Location: ../account.php?result=2');
            } else {
                $changemail = "UPDATE utilisateur SET Mail = '$mail' WHERE id =$_SESSION[id]";
                if ($conn->query($changemail) === TRUE) {
                    $_SESSION['mail'] = $mail;
                    $achievemail = $conn->query($changemail);
                    $conn->close();
                    header('Location: ../account.php?result=3');
                } 
            }
        } else {
            //Mot de passe faux
            header('Location: ../account.php?result=0');
        }
    }
?>