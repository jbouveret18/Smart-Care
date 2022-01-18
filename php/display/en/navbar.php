<?php
        if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
        if (isset($_SESSION['connected']) && $_SESSION['connected']==true ) {
            echo("<nav>
            <a href='index.php'><button class='bouton' style='font-size: calc(15px + 2vw);'><img src='../img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
                <div class='dropdown'>
                    <button class='dropbtn'>
                        <img class='flag' src='../img/Drapeaueng.png' class='flag1'>
                    </button>
                    <div class='dropdown-content'>
                        <button class='dropbtn' onclick=\"redirect(event,'/fr')\">
                            <img class='flag' src='../img/Drapeaufr.png' class='flag2'>
                        </button>
                    </div>
                </div>
            <a href='account.php'><button class='bouton' style='float: right'><div class='write'>$_SESSION[nom] $_SESSION[prenom]</div></button></a>
            <a href='leaderboard.php'><button class='bouton' style='float: right'><div class='write'>Leaderboard</div></button></a>
            <a href='dashboard.php'><button class='bouton' style='float: right'><div class='write'>Dashboard</div></button></a></nav>
            <script src=../javascript/translate.js></script>
            ");
        } else {
        echo("<nav>
        <a href='index.php'><button class='bouton' style='font-size: calc(15px + 2vw);'><img src='../img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
        <div class='dropdown'>
                    <button class='dropbtn'>
                        <img class='flag' src='../img/Drapeaueng.png' class='flag1'>
                    </button>
                    <div class='dropdown-content'>
                        <button class='dropbtn' onclick=\"redirect(event,'/fr')\">
                            <img class='flag' src='../img/Drapeaufr.png' class='flag2'>
                        </button>
                    </div>
                </div>
        <a href='index.php#discover'><button class='bouton' style='float: right'><div class='write'>Découvrir</div></button></a>
        <a href='login.php'><button class='bouton' href='#' style='float: right'><div class='write'>Connexion</div></button></a>
        <a href='register.php'><button class='bouton' href='#' style='float: right'><div class='write'>Nous rejoindre</div></button></a></nav>
        ");}
?>