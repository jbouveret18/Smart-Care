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
        <a href="login.html"><button class="bouton" href="#" style="float: right"><div class="write">Connexion</div></button></a>
        <a href="#"><button class="bouton" href="#" style="float: right"><div class="write">Nous rejoindre</div></button></a>
    </nav>

    <div class="form">
        <div class="login">
            <h2>Connexion</h2>
            <form action="login.php">
                <label for="usermail">Adresse mail:</label>
                <input type="text" id="usermail" name="mail" placeholder="Votre mail.."><br>
          
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe.."><br>
            
                <input type="submit" value="Se connecter">
            </form>
          </div>
          <div class="login">
            <h2>Enregistrement</h2>
            <form action="login.php" method="post">
                <label for="usermail">Adresse mail:</label>
                
                <input type="text" id="usermail" name="mail" placeholder="Votre mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
          
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Votre mot de passe doit contenir 8 caractères dont au moins une majuscule, un caractère spécial et un chiffre"><br>
                
                <label for="password">Confirmez votre mot de passe</label>
                <input type="password" id="password2" name="password2" placeholder="Confirmez votre mot de passe.." required="required"><br>

                <span class="red1">
                <?php 
                $_mail = $_POST["mail"];
                $_pass1 = password_hash($_POST["password"],PASSWORD_DEFAULT);
                $_pass2 = $_POST["password2"];
                if ($_mail != null) {
                    if (password_verify($_pass2,$_pass1)){
                        session_start();
                        $_SESSION['mail'] = $_mail;
                        $_SESSION['pass'] = $_pass1;
                        header('Location: register.php');
                    } else {
                        echo('<p>Veuillez saisir 2 mots de passe identique</p>');
                    }
                }
                ?>
                </span>

                <input type="submit" value="S'inscrire">
            </form>
          </div>
    </div>
    


    <footer>
        <p>©2021 SmartCare</p>
    </footer>
</body>
</html>