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
    <link rel="stylesheet" href="css/ranking.css">
    <link rel='stylesheet' href='css/common.css'>
</head>
<body>
    <?php
        if (!isset($_SESSION['connected'])) {
            header('Location: login.php?error=5');
        }
        include 'php/navbar.php';
    ?>
    <div class='ranking'>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "app";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $id=$_SESSION['id'];
    $sqlscore= "SELECT nom,prenom,score FROM utilisateur WHERE id=$id";
    $resultscore = $conn->query($sqlscore);   
    if ($resultscore->num_rows > 0) {
        $resultscore = mysqli_fetch_assoc($resultscore);
        echo("$resultscore[nom] $resultscore[prenom], votre score est $resultscore[score]");
    }

        //On va prendre le nom, prénom et le score des 100 utilisateur qui ont le plus grand score et les afficher
        //Le calcul du score reste à définir
        $sql ='SELECT nom,prenom,score FROM utilisateur ORDER BY score DESC LIMIT 10;';
        $result = $conn->query($sql);
        $rank = 1;
        while($row = mysqli_fetch_assoc($result)) {
             echo("<div class='case'>$rank $row[nom] $row[prenom] <span class='alignedroite'>$row[score]</span></div>"); 
             $rank+=1;
        }
        ?>
    </div>
</body>
</html>