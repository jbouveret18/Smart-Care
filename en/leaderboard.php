<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        include '../php/display/en/navbar.php';
    ?>
    <div class='ranking'>
        <span class='center'><h2>TOP 10</h2></span>
        <?php
            include '../php/display/en/top10.php';
        ?>
        
        <span class='center'><h3>You</h3></span>
        <?php
            include '../php/display/en/userscore.php';
        ?>
    </div>

    <span class='center'><h4>Search an user</h4></span>
    <form action="leaderboard.php" method ="post">
        <div class='center'>
            <label for="searchnom">Name:</label>
            <input type="text" id="searchnom" name="searchnom" placeholder="Name of user sought.."><br>
            
            <label for="searchprenom">First name:</label>
            <input type="text" id="searchprenom" name="searchprenom" placeholder="First name of the user sought..">
        </div>
        <div class='center'><input type="submit" value="Search"></div>
    </form>
    <?php
        include '../php/display/en/searchuserscore.php';
    ?>  
    

    <?php
        include 'footer.html';
    ?>
</body>
</html>