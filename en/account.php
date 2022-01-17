<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
     include '../php/display/en/errorAccount.php';
    ?>

<div class="tab">
  <button class="tablinks" onclick="openTabs(event, 'general')" id="defaultOpen">General informations</button>
  <button class="tablinks" onclick="openTabs(event, 'changemdp')">Change password</button>
  <button class="tablinks" onclick="openTabs(event, 'changemail')">Change e-mail address</button>
</div>

<div id="general" class="tabcontent">
  <h3>General informations</h3>
      Name: <?php echo $_SESSION['nom']; ?> <br>
      First name: <?php echo $_SESSION['prenom']; ?> <br><br>
      Object number: <?php echo $_SESSION['nobjet']; ?> <br><br>
      E-mail address: <?php echo $_SESSION['mail']; ?>
</div>

<div id="changemdp" class="tabcontent">
  <h3>Change password</h3>
  <form action="../php/changemdp.php" method ="post">
    <label for="password">New password:</label>
    <input type="password" id="password" name="password" placeholder="New password.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Your password must contain 8 characters including at least one capital letter, one special character and one number"><br>

    <label for="password2">Confirm your new password:</label>
    <input type="password" id="password2" name="password2" placeholder="Confirm your new password.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Your password must contain 8 characters including at least one capital letter, one special character and one number"><br>

    <input type="submit" value="Changer de mot de passe">
  </form>
</div>

<div id="changemail" class="tabcontent">
  <h3>Change e-mail address</h3>
  <form action="../php/changemail.php" method ="post">
  <label for="usermail">New e-mail:</label>
  <input type="text" id="usermail" name="mail" placeholder="Your new e-mail address.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" placeholder="Your password..">
  <input type="submit" value="Se connecter">
  </form>
</div>

<script src=../javascript/tabs.js></script>

    <a href='../php/disconnect.php'><button class='bouton'><div class='write'>Disconnect</div></a>

    <button class="tablinks" onclick="redirect(event,'/fr')">French</button>

    <script src=../javascript/translate.js></script>
</body>
<?php
        include 'footer.html';
    ?>
</html>