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
    <link rel="stylesheet" href="css/ranking.css">
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['connected']) && $_SESSION=true ) {
            echo(" <nav>
            <a href='index.php'><button class='bouton' href='bottom.html' style='font-size: 50px;'><img src='img/blank.png' class='logo'>Smart<span class='span'>Care</span></button></a>
            <a href='account.php'><button class='bouton' style='float: right'><div class='write'>Mon profil</div></button></a>
            <a href='#'><button class='bouton' style='float: right'><div class='write'>Leaderboard</div></button></a>
            <a href='#'><button class='bouton' style='float: right'><div class='write'>Dashboard</div></button></a></nav>
            ");
        } else {    
            header('Location: login.php?error=5');}
    ?>
    <div class='ranking'>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "app";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //On va prendre le nom, prénom et le score des 100 utilisateur qui ont le plus grand score et les afficher
        //Le calcul du score reste à définir
        $sql ='SELECT nom,prenom,score FROM utilisateur ORDER BY score DESC LIMIT 100;';
        $result = $conn->query($sql);
        while($row = mysqli_fetch_assoc($result)) {
             echo("<div class='case'>$row[nom] $row[prenom] <span class='alignedroite'>$row[score]</div></div>"); 
        }
        ?>
    </div>
</body>
</html>