<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Mon compte</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel='stylesheet' href='../css/common.css'>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['connected'])) {
            header('Location: login.php?error=6');
        }
        include '../php/display/fr/navbar.php';
    ?>

    <div class="boite">
    <div id="RC" class="tabcontent">
        <div style="width: 50%; margin-left: auto; margin-right: auto; height: 60% ">
            <canvas id="myChartrc"></canvas>
            <?php
                $table="rc";
                $titregraphe="Mon rythme cardiaque";
                include '../php/chart.php';
             ?>
        </div>
    </div>

    <div id="Temperature" class="tabcontent">
        <div style="width: 50%; margin-left: auto; margin-right: auto; height: 60% ">
            <canvas id="myCharttemperature_corps"></canvas>
            <?php
                $table="temperature_corps";
                $titregraphe="Temperature";
                include '../php/chart.php';
             ?>
        </div>
    </div>

    <div id="Db" class="tabcontent">
    <div style="width: 50%; margin-left: auto; margin-right: auto; height: 60% ">
            <canvas id="myChartvolume"></canvas>
            <?php
                $table="volume";
                $titregraphe="Volume sonore";
                include '../php/chart.php';
             ?>
        </div>
    </div>

    <div id="Gaz" class="tabcontent">
        <div style="width: 50%; margin-left: auto; margin-right: auto; height: 60% ">
            <canvas id="myChartgaz"></canvas>
            <?php
                $table="gaz";
                $titregraphe="Volume de gaz";
                include '../php/chart.php';
             ?>
        </div>
    </div>
    
    <div class="tab">
        <button class="tablinks" onclick="openTabs(event, 'RC')" id="defaultOpen">Rythme cardiaque</button>
        <button class="tablinks" onclick="openTabs(event, 'Temperature')">Temperature corporelle</button>
        <button class="tablinks" onclick="openTabs(event, 'Db')">Volume sonore</button>
        <button class="tablinks" onclick="openTabs(event, 'Gaz')">Quantité de gaz</button>
    </div>
    </div>
    
    <script src=../javascript/Tabs.js></script>
    <script src=../javascript/chart.js></script>

    <?php
        include 'footer.html';
    ?>

</body>
</html>