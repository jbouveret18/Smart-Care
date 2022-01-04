<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel='stylesheet' href='css/common.css'>
    <link rel="shortcut icon" href="img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>Connexion</title>
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
        if (isset($_GET['error']) && $_GET['error']==7){
            echo("<span class='errorcenter'><p>Vous devez être connecté pour accéder à votre compte</p></span>");
        }
    ?>
    <div class="form">
        <div class="login">
            <h2>Connexion</h2>
            <form action="php/loginform.php" method ="post">
                <label for="usermail">Adresse mail:</label>
                <input type="text" id="usermail" name="mail" placeholder="Votre mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
          
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe..">
                <span class="error">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == 3) {
                        echo("Mauvaise adresse mail/Mot de passe faux<br><br>");
                    }
                    if ($_GET["error"] == 4) {
                        echo("Ce nom d'utilisateur n'existe pas<br><br>");
                    }
                }
                ?>
                <input type="submit" value="Se connecter">
            </form>
          </div>
    </div>
    <?php
        include 'php/footer.php';
    ?>
</body>
</html>