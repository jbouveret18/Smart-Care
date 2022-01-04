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
    <link rel="stylesheet" href="css/account.css">
    <link rel='stylesheet' href='css/common.css'>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['connected'])) {
            header('Location: login.php?error=7');
        }
        include 'php/navbar.php';
    ?>

    <br>
    <?php
    if (isset($_GET["result"])) {
      if ($_GET["result"] == 0) {
          echo("<span class='error'><p>Mot de passe faux</p></span>  ");
      }
      if ($_GET["result"] == 1) {
          echo("<span class='succes'><p>Mot de passe changé avec succès</p></span>");
      }
      if ($_GET["result"] == 2) {
        echo("<span class='error'><p>L'adresse mail est déjà utilisé</p></span>");
      }
      if ($_GET["result"] == 3) {
        echo("<span class='succes'><p>Adresse mail modifié avec succès</p></span>");
      }
    }
  ?>
<div class="tab">
  <button class="tablinks" onclick="openAction(event, 'general')" id="defaultOpen">Information Général</button>
  <button class="tablinks" onclick="openAction(event, 'changemdp')">Changer de mot de passe</button>
  <button class="tablinks" onclick="openAction(event, 'changemail')">Changer d'adresse mail</button>
</div>

<div id="general" class="tabcontent">
  <h3>Information Général</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="changemdp" class="tabcontent">
  <h3>Changer de mot de passe</h3>
  <form action="php/changemdp.php" method ="post">
    <label for="password">Nouveau mot de passe:</label>
    <input type="password" id="password" name="password" placeholder="Nouveau mot de passe.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Votre mot de passe doit contenir 8 caractères dont au moins une majuscule, un caractère spécial et un chiffre"><br>

    <label for="password2">Confirmez votre mot de passe:</label>
    <input type="password" id="password2" name="password2" placeholder="Confirmez votre mot de passe.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Votre mot de passe doit contenir 8 caractères dont au moins une majuscule, un caractère spécial et un chiffre"><br>

    <input type="submit" value="Changer de mot de passe">
  </form>
</div>

<div id="changemail" class="tabcontent">
  <h3>Changer d'adresse mail</h3>
  <form action="php/changemail.php" method ="post">
  <label for="usermail">Nouvelle adresse mail:</label>
  <input type="text" id="usermail" name="mail" placeholder="Votre nouvelle adresse mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
  <label for="password">Mot de passe:</label>
  <input type="password" id="password" name="password" placeholder="Votre mot de passe..">
  <span class="error">
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == 3) {
        echo("Mauvaise adresse mail/Mot de passe faux<br><br>");
      }
      if ($_GET["error"] == 4) {
        echo("Ce nom d'utilisateur n'existe pas<br><br>");
      }
    }
  ?>
  </span>
  <input type="submit" value="Se connecter">
  </form>
</div>

<script src=javascript/tabs.js></script>

    <a href='php/disconnect.php'><button class='bouton'><div class='write'>Disconnect</div></a>
</body>
</html>