<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>Login</title>

</head>
<body>
    <nav>
        <a href="index.html"><button class="bouton" href="bottom.html" style="font-size: 50px;"><img src="img/blank.png" class="logo">Smart<span class="span">Care</span></button></a>
        <a href="#"><button class="bouton" style="float: right"><div class="write">Langues</div></button></a>
        <a href="index.html#discover"><button class="bouton" style="float: right"><div class="write">Découvrir</div></button></a>
        <a href="login.php"><button class="bouton" href="#" style="float: right"><div class="write">Connexion</div></button></a>
        <a href="#"><button class="bouton" href="#" style="float: right"><div class="write">Nous rejoindre</div></button></a>
    </nav>

    <div class="register">
        <div class="login">
        <?php 
                session_start();
                $_mail = $_SESSION['mail'];
                $_pass1 = $_SESSION['pass'];
                $_nom = $_POST["nom"];
                $_prenom = $_POST["prenom"];
                $_nobjet =  $_POST["nobjet"];

                if ($_nom!=null AND $_prenom!=null AND $_nobjet!=null) {

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

                    $sql = "INSERT INTO utilisateur(Nom,Prenom,Mail,Password,numero_objet) VALUES ('$_nom', '$_prenom', '$_mail','$_pass1',$_nobjet)";

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
        ?>
    <form action="register.php" method="post">

        <label for="Nom">Nom:</label>
        <input type="text" id="usernom" name="nom" placeholder="Veuillez saisir votre nom.." required="required" title="Veullez saisir votre nom"><br>
  
        <label for="Prenom">Prénom:</label>
        <input type="text" id="Userprenom" name="prenom" placeholder="Veuillez saisir votre nom.." required="required" title="Veuillez saisir votre prénom"><br>

        <label for="nobjet">Entrez votre numéro d'objet</label>
        <input type="text" id="usernobjet" name="nobjet" placeholder="Veuillez saisir votre numéro d'objet.." required="required" pattern="[0-9]{1,10}" title="Veuillez saisir un numéro d'objet valide"><br>

        <span class="center">
            <input type="submit" value="S'inscrire">
        </span>
    
    </form>
    </div>
    </div>

    <footer>
        <p>©2021 SmartCare</p>
    </footer>
</body>
</html>