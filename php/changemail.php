<?php
    session_start();

    require  'connexion.php';

    $passCheck = htmlspecialchars($_POST["password"], ENT_COMPAT,'ISO-8859-1', true);
    $mail = htmlspecialchars($_POST["mail"], ENT_COMPAT,'ISO-8859-1', true);

    $sql = $conn->prepare("SELECT Password FROM utilisateur WHERE id=?;");
    $sql->bind_param("i", $_SESSION['id']);
    $sql->execute();
    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        $_passHash = mysqli_fetch_assoc($result);
        if (password_verify($passCheck,$_passHash['Password'])) {

            $checkmail= "SELECT Password FROM utilisateur WHERE Mail='$mail';";
            $resultmail = $conn->query($checkmail);
            if ($resultmail->num_rows > 0) {
                //Adresse mail déjà utilisé
                header("Location: $_SERVER[HTTP_REFERER]?result=2");
            } else {
                $changemail = "UPDATE utilisateur SET Mail = '$mail' WHERE id =$_SESSION[id]";
                if ($conn->query($changemail) === TRUE) {
                    $_SESSION['mail'] = $mail;
                    $achievemail = $conn->query($changemail);
                    $conn->close();
                    header("Location:  $_SERVER[HTTP_REFERER]?result=3");
                } 
            }
        } else {
            //Mot de passe faux
            header("Location:  $_SERVER[HTTP_REFERER]?result=0");
        }
    }
?>