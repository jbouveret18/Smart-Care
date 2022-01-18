<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        include '../php/display/en/navbar.php';
    ?>

    <div class="boite">
    <div id="RC" class="tabcontent">
        <h3>Heartbeat</h3>
        <p>Heartbeat monitor</p>
    </div>

    <div id="Temperature" class="tabcontent">
        <h3>Temperature</h3>
        <p>Displaying your skin temperature</p>
    </div>

    <div id="Db" class="tabcontent">
        <h3>Sound volume</h3>
        <p>Display sound volume</p>
    </div>

    <div id="Gaz" class="tabcontent">
        <h3>Gas</h3>
        <p>Display density of gas</p>
    </div>

    
    <div class="tab">
        <button class="tablinks" onclick="openTabs(event, 'RC')" id="defaultOpen">Heartbeat</button>
        <button class="tablinks" onclick="openTabs(event, 'Temperature')">Temperature</button>
        <button class="tablinks" onclick="openTabs(event, 'Db')">Sound Volume</button>
        <button class="tablinks" onclick="openTabs(event, 'Gaz')">Gas</button>
    </div>
    </div>
    
    <script src=../javascript/Tabs.js></script>
    
    <?php
        include 'footer.html';
    ?>
</body>
</html>