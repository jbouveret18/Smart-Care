<?php
require  'connexion.php';
$_mail = htmlspecialchars($_POST["mail"], ENT_COMPAT,'ISO-8859-1', true);
$_pass1 = password_hash(htmlspecialchars($_POST["password"], ENT_COMPAT,'ISO-8859-1', true),PASSWORD_DEFAULT);
$_pass2 = htmlspecialchars($_POST["password2"], ENT_COMPAT,'ISO-8859-1', true);
$_nom = htmlspecialchars($_POST["nom"], ENT_COMPAT,'ISO-8859-1', true);
$_prenom = htmlspecialchars($_POST["prenom"], ENT_COMPAT,'ISO-8859-1', true);
$_nobjet =  htmlspecialchars($_POST["nobjet"], ENT_COMPAT,'ISO-8859-1', true);

$sql = "SELECT Mail FROM utilisateur WHERE MAIL = '$_mail';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo("<p>L'adresse mail existe déjà</p>");
    header("Location:  $_SERVER[HTTP_REFERER]?error=1");
} else {
    echo("<p>L'adresse mail n'existe pas</p>");
    if (password_verify($_pass2,$_pass1)){
        $sql = "INSERT INTO utilisateur(Nom,Prenom,Mail,Password,numero_objet) VALUES ('$_nom', '$_prenom', '$_mail','$_pass1',$_nobjet)";

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
        header('Location:  $_SERVER[HTTP_REFERER]?error=5');
    } else {
        header('Location:  $_SERVER[HTTP_REFERER]?error=2');
    }
}
?>