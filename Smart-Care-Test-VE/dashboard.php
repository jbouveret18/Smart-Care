<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel='stylesheet' href='css/common.css'>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['connected'])) {
            header('Location: login.php?error=6');
        }
        include 'php/navbar.php';
    ?>

    <div class="stats">
        <div class="displaystat">
            <p>Heartbeat</p>
            <img class="imgstat" src="img/cardiaque.png">
        </div>
        <div class="displaystat">
            <p>sound volume</p>
            <img class="imgstat" src="img/CO2.gif">
        </div>
        <div class="displaystat">
            <p>body temperature</p>
            <img class="imgstat" src="img/temperature.png">
        </div>
        <div class="displaystat">
            <p>amount of gas</p>
            <img class="imgstat" src="img/son.jpg">
        </div>
    </div>
    <footer>
        <p>©2021 SmartCare</p>
    </footer>
</body>
</html>