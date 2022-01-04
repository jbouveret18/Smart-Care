<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>S'inscrire 1/2</title>

</head>
<body>
    <nav>
    <?php
        include 'php/navbar.php';
    ?>
    </nav>

    <div class="register">
        <div class="login">

    <form action="php/registerprocess2.php" method="post">

        <label for="Nom">Nom:</label>
        <input type="text" id="usernom" name="nom" placeholder="Veuillez saisir votre nom.." required="required" title="Veullez saisir votre nom"><br>
  
        <label for="Prenom">Prénom:</label>
        <input type="text" id="Userprenom" name="prenom" placeholder="Veuillez saisir votre nom.." required="required" title="Veuillez saisir votre prénom"><br>

        <label for="nobjet">Entrez votre numéro d'objet</label>
        <input type="text" id="usernobjet" name="nobjet" placeholder="Veuillez saisir votre numéro d'objet.." required="required" pattern="[0-9]{1,10}" title="Veuillez saisir un numéro d'objet valide"><br>

        <span class="center">
            <input type="submit" value="S'inscrire">
        </span>
    
    </form>
    </div>
    </div>
    <?php
        include 'php/footer.php';
    ?>
</body>
</html>