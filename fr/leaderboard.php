<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/blank.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <link rel="stylesheet" href="../css/ranking.css">
    <link rel='stylesheet' href='../css/common.css'>
</head>
<body>
    <?php
        if (!isset($_SESSION['connected'])) {
            header('Location: login.php?error=5');
        }
        include '../php/display/fr/navbar.php';
    ?>
    <div class='ranking'>
        <span class='center'><h2>TOP 10</h2></span>
        <?php
            include '../php/display/fr/top10.php';
        ?>
        
        <span style="text-align : center"><h3>Vous</h3></span>
        <?php
            include '../php/display/fr/userscore.php';
        ?>
    </div>

    <span class='center'><h4>Rechercher un utilisateur</h4></span>
    <form action="leaderboard.php" method ="post">
        <div class='center'>
            <label for="searchnom" class="pad1">Nom:</label>
            <input type="text" id="searchnom" name="searchnom" placeholder="Nom de l'utilisateur cherché.." class="center2">
            
            <label for="searchprenom" class="pad1">Prénom:</label>
            <input type="text" id="searchprenom" name="searchprenom" placeholder="Prénom de l'utilisateur cherché.." class="center2">
        </div>
        <div class='center3'><input type="submit" value="Chercher"></div>
    </form>
    <?php
        include '../php/display/fr/searchuserscore.php';
    ?>  
    

    <?php
        include 'footer.html';
    ?>
</body>
</html>