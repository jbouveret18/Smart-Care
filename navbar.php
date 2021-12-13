<?php
        session_start();
        if (isset($_SESSION['connected']) && $_SESSION=true ) {
            echo("<nav>
            <a href='index.php'><button class='bouton' href='bottom.html' style='font-size: 50px;'><img src='img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
            <a href='account.php'><button class='bouton' style='float: right'><div class='write'>Mon profil</div></button></a>
            <a href='leaderboard.php'><button class='bouton' style='float: right'><div class='write'>Leaderboard</div></button></a>
            <a href='#'><button class='bouton' style='float: right'><div class='write'>Dashboard</div></button></a></nav>
            ");
        } else {
        echo("<nav>
        <a href='index.php'><button class='bouton' href='bottom.html' style='font-size: 50px;'><img src='img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
        <a href='#'><button class='bouton' style='float: right'><div class='write'>Langues</div></button></a>
        <a href='index.php#discover'><button class='bouton' style='float: right'><div class='write'>Découvrir</div></button></a>
        <a href='login.php'><button class='bouton' href='#' style='float: right'><div class='write'>Connexion</div></button></a>
        <a href='#'><button class='bouton' href='#' style='float: right'><div class='write'>Nous rejoindre</div></button></a></nav>
        ");}

        if (isset($_GET['error']) && $_GET['error']=5){
            echo("<span class='errorcenter'><p>Vous devez être connecté pour accéder au leaderboard</p></span>");
        }
?>