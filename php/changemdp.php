<?php
    require  'connexion.php';
    session_start();
    $_pass1 = password_hash(htmlspecialchars($_POST["password"], ENT_COMPAT,'ISO-8859-1', true),PASSWORD_DEFAULT);
    $_pass2 = htmlspecialchars($_POST["password2"], ENT_COMPAT,'ISO-8859-1', true);

    if (password_verify($_pass2,$_pass1)){
        $sql = "UPDATE utilisateur SET Password = '$_pass1' WHERE id =$_SESSION[id]";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("Location: $_SERVER[HTTP_REFERER]?result=1");
        } 
    } else {
        header("Location: $_SERVER[HTTP_REFERER]?result=0");
    }
?>