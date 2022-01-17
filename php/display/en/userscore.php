<?php
    require '../php/connexion.php';
    $id=$_SESSION['id'];
        $sqlscore= "SELECT ROW_NUMBER() OVER() AS rank,nom,prenom,score FROM utilisateur WHERE id=$id";
        $resultscore = $conn->query($sqlscore);   
        if ($resultscore->num_rows > 0) {
            $resultscore = mysqli_fetch_assoc($resultscore);
            echo("<span class='center'><p>$resultscore[nom] $resultscore[prenom], your score is $resultscore[score] and you are n°$resultscore[rank]</p></span>");
        }
?>