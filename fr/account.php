<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <link rel="stylesheet" href="../css/account.css">
    <link rel='stylesheet' href='../css/common.css'>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['connected'])) {
            header('Location: login.php?error=7');
        }
        include '../php/navbar.php';
    ?>

    <br>
    <?php
     include '../php/display/errorAccount.php';
    ?>

<div class="tab">
  <button class="tablinks" onclick="openTabs(event, 'general')" id="defaultOpen">Informations générales</button>
  <button class="tablinks" onclick="openTabs(event, 'changemdp')">Changer de mot de passe</button>
  <button class="tablinks" onclick="openTabs(event, 'changemail')">Changer d'adresse mail</button>
</div>

<div id="general" class="tabcontent">
  <h3>Informations générales</h3>
      Nom: <?php echo $_SESSION['nom']; ?> <br>
      Prénom: <?php echo $_SESSION['prenom']; ?> <br><br>
      Numéro d'objet: <?php echo $_SESSION['nobjet']; ?> <br><br>
      Adresse mail actuelle: <?php echo $_SESSION['mail']; ?>
</div>

<div id="changemdp" class="tabcontent">
  <h3>Changer de mot de passe</h3>
  <form action="../php/changemdp.php" method ="post">
    <label for="password">Nouveau mot de passe:</label>
    <input type="password" id="password" name="password" placeholder="Nouveau mot de passe.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Votre mot de passe doit contenir 8 caractères dont au moins une majuscule, un caractère spécial et un chiffre"><br>

    <label for="password2">Confirmez votre mot de passe:</label>
    <input type="password" id="password2" name="password2" placeholder="Confirmez votre mot de passe.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Votre mot de passe doit contenir 8 caractères dont au moins une majuscule, un caractère spécial et un chiffre"><br>

    <input type="submit" value="Changer de mot de passe">
  </form>
</div>

<div id="changemail" class="tabcontent">
  <h3>Changer d'adresse mail</h3>
  <form action="../php/changemail.php" method ="post">
  <label for="usermail">Nouvelle adresse mail:</label>
  <input type="text" id="usermail" name="mail" placeholder="Votre nouvelle adresse mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
  <label for="password">Mot de passe:</label>
  <input type="password" id="password" name="password" placeholder="Votre mot de passe..">
  <input type="submit" value="Se connecter">
  </form>
</div>

<script src=../javascript/tabs.js></script>

    <a href='../php/disconnect.php'><button class='bouton'><div class='write'>Disconnect</div></a>

    <button class="tablinks" onclick="redirect(event,'/en')">Redirection</button>

    <script src=../javascript/translate.js></script>
</body>
<?php
        include 'footer.html';
    ?>
</html>