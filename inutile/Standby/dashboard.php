<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
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

    <div class="boite">
    <div id="RC" class="tabcontent">
        <h3>Rythme cardiaque</h3>
        <p>Affichage du rythme cardiaque</p>
    </div>

    <div id="Temperature" class="tabcontent">
        <h3>Paris</h3>
        <p>Affichage de la température corporelle</p>
    </div>

    <div id="Db" class="tabcontent">
        <h3>Volume sonore</h3>
        <p>Affichage du volume sonore</p>
    </div>

    <div id="Gaz" class="tabcontent">
        <h3>Quantité de gaz</h3>
        <p>Affichage de la quantité de gaz</p>
    </div>

    
    <div class="tab">
        <button class="tablinks" onclick="openTabs(event, 'RC')" id="defaultOpen">Rythme cardiaque</button>
        <button class="tablinks" onclick="openTabs(event, 'Temperature')">Temperature corporelle</button>
        <button class="tablinks" onclick="openTabs(event, 'Db')">Volume sonore</button>
        <button class="tablinks" onclick="openTabs(event, 'Gaz')">Quantité de gaz</button>
    </div>
    </div>
    
    <script src=javascript/Tabs.js></script>
    
    <?php
        include 'php/footer.php';
    ?>
</body>
</html>