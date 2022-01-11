<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

$_mail = htmlspecialchars($_POST["mail"], ENT_COMPAT,'ISO-8859-1', true);
$_pass1 = password_hash(htmlspecialchars($_POST["password"], ENT_COMPAT,'ISO-8859-1', true),PASSWORD_DEFAULT);
$_pass2 = htmlspecialchars($_POST["password2"], ENT_COMPAT,'ISO-8859-1', true);
$_nom = htmlspecialchars($_POST["nom"], ENT_COMPAT,'ISO-8859-1', true);
$_prenom = htmlspecialchars($_POST["prenom"], ENT_COMPAT,'ISO-8859-1', true);
$_nobjet =  htmlspecialchars($_POST["nobjet"], ENT_COMPAT,'ISO-8859-1', true);
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
    header("Location: ../register.php?error=1");
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
        header('Location: ../register.php?error=5');
    } else {
        header('Location: ../register.php?error=2');
    }
}
?>