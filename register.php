<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel='stylesheet' href='css/common.css'>
    <link rel="shortcut icon" href="img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>S'inscrire</title>
</head>
<body>
    
    <?php
        include 'php/navbar.php';
        
        if (isset($_GET['error']) && $_GET['error']==5){
            echo("<span class='errorcenter'><p>Vous devez être connecté pour accéder au leaderboard</p></span>");
        }
        if (isset($_GET['error']) && $_GET['error']==6){
            echo("<span class='errorcenter'><p>Vous devez être connecté pour accéder au dashboard</p></span>");
        }
    ?>
    <h2>S'inscrire</h2>
    <div class="formulaire">
        <form action="php/registerfull.php" method ="post">
        <div class="login">
            
            
                <label for="usermail">Adresse mail:</label>
                <input type="text" id="usermail" name="mail" placeholder="Votre mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
                <span class="error">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == 1) {
                        echo("Cette adresse mail est déjà utilisée<br>");
                    }
                }
                ?>
                </span>
            
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Votre mot de passe doit contenir 8 caractères dont au moins une majuscule, un caractère spécial et un chiffre"><br>

                <label for="password2">Confirmez votre mot de passe:</label>
                <span class="error">
                <?php
                if (isset($_GET["error"])) {
                   if ($_GET["error"] == 2) {
                        echo("<br>Veuillez saisir deux mots de passe identiques.");
                    }
                }
                ?>
                </span>
                <input type="password" id="password2" name="password2" placeholder="Confirmez votre mot de passe.." required="required"><br>
            
          </div>

          <div class="login">
                <label for="nom">Nom:</label>

                <input type="text" id="nom" name="nom" placeholder="Votre nom.." required="required"><br>

                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prenom.." required="required"><br>
                
                <label for="nobjet">Votre numéro d'objet:</label>
                <input type="text" id="nobjet" name="nobjet" placeholder="Votre numéro d'objet.." required="required"><br>
            
          </div>
          <input type="submit" value="S'inscrire">
        </form>
    </div>
    


    <footer>
        <p>©2021 SmartCare</p>
    </footer>
</body>
</html>