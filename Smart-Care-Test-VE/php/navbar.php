<?php
        if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
        if (isset($_SESSION['connected']) && $_SESSION==true ) {
            echo("<nav>
            <a href='index.php'><button class='bouton' href='bottom.html' style='font-size: 50px;'><img src='img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
            <a href='account.php'><button class='bouton' style='float: right'><div class='write'>$_SESSION[nom] $_SESSION[prenom]</div></button></a>
            <a href='leaderboard.php'><button class='bouton' style='float: right'><div class='write'>Leaderboard</div></button></a>
            <a href='dashboard.php'><button class='bouton' style='float: right'><div class='write'>Dashboard</div></button></a></nav>
            ");
        } else {
        echo("<nav>
        <a href='index.php'><button class='bouton' href='bottom.html' style='font-size: 50px;'><img src='img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
        <a href='login.php'><button class='bouton' style='float: right'><div class='write'>Languages</div></button></a>
        <a href='index.php#discover'><button class='bouton' style='float: right'><div class='write'>discover</div></button></a>
        <a href='login.php'><button class='bouton' href='#' style='float: right'><div class='write'>Connexion</div></button></a>
        <a href='register.php'><button class='bouton' href='#' style='float: right'><div class='write'>join us</div></button></a></nav>
        ");}
?>