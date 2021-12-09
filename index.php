<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>Crash Area</title>
</head>
<body>

    <nav>
    <?php
        session_start();
        if (isset($_SESSION['connected']) && $_SESSION=true ) {
            echo(" 
            <a href='index.php'><button class='bouton' href='bottom.html' style='font-size: 50px;'><img src='img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
            <a href='account.php'><button class='bouton' style='float: right'><div class='write'>Mon profil</div></button></a>
            <a href='leaderboard.php'><button class='bouton' style='float: right'><div class='write'>Leaderboard</div></button></a>
            <a href='#'><button class='bouton' style='float: right'><div class='write'>Dashboard</div></button></a>
            ");
        } else {
        echo("
        <a href='index.php'><button class='bouton' href='bottom.html' style='font-size: 50px;'><img src='img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
        <a href='#'><button class='bouton' style='float: right'><div class='write'>Langues</div></button></a>
        <a href='index.php#discover'><button class='bouton' style='float: right'><div class='write'>Découvrir</div></button></a>
        <a href='login.php'><button class='bouton' href='#' style='float: right'><div class='write'>Connexion</div></button></a>
        <a href='#'><button class='bouton' href='#' style='float: right'><div class='write'>Nous rejoindre</div></button></a>");}
        ?>
    </nav>

    <div class="middlemainflex">
    <div class="leftflex">
        <div class="txt1">Ameliorer</div></br>
        <div class="txt2">Votre <span class="spx">bien-être</span></div></br>
        <div class="txt3">Grâce à notre assistant bien-être et aux 5 capteurs présents sur notre montre connectée</div></br>
        <button class="rect" href="#">Nous rejoindre</button>
     </div>
    <div class="rightflex">
        <img src="img/watch1.svg" class="watch1">
        <img src="img/watch2.svg" class="watch2">
    </div>
    </div>
     
    <div class="montre" id="discover">
        <div class="one"><img src="img/montre_icon.png" class="montre_pic"></div>
        <div class="two"><h1>Légère, Rapide et puissante</h1>
            <p>SmartCare est un assistant qui vous accompagnera dans votre quête du bien-être. A l’aide des nombreux capteurs présents sur notre montre nouvelle génération SmartCare, notre assistant vous guidera à travers de nombreux conseils et précieuses aides selon les données qu’il relèvera.
                <br><br>Il améliorera considérablement votre mode de vie en analysant les données de l’environnement qui vous entoure et en vous signalant s’il y a un risque pour votre santé. 
                <br><br>Rejoignez et défiez vos amis en ayant le mode de vie le plus sain possible 
            </p>
        </div>
        <div class="three">
            <img src="img/heart.svg" >
            <h3>Capteur cardiaque</h3>
            Calcule la fréquence cardiaque et élabore votre conditon physique en fonction des activités que vous réalisé
        </div>
        <div class="four">
            <img src="img/speaker.svg" >
            <h3>Capteur Sonore</h3>
            Mesure la puissance sonore de votre envirronnement et détecte les potentiels risques de dommage pour votre oreille
        </div>
        <div class="five">
            <img src="img/heat.svg" >
            <h3>Capteur de température corporelle</h3>
            Relève votre température corporelle et vérifie que vous êtes en forme et en bonne santé
        </div>
        <div class="six">
            <img src="img/gaz.svg" >
            <h3>Capteur de gaz</h3>
            Analyse l’air ambiant et détecte s’il y’a la présence de gaz nocif pour votre santé 
        </div>
        <div class="sept"> 
        </div>
      </div>
    <footer>
        <p>©2021 SmartCare</p>
    </footer>
</body>
</html>