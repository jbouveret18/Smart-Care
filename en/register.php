<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <link rel='stylesheet' href='../css/common.css'>
    <link rel="shortcut icon" href="../img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>S'inscrire</title>
</head>
<body>
    
    <?php
        include '../php/display/en/navbar.php';
        
        if (isset($_GET['error']) && $_GET['error']==5){
            echo("<span class='errorcenter'><p>Account created successfully</p></span>");
        }
    ?>
    <h2>Register</h2>
    <div class="formulaire">
        <form action="../php/registerfull.php" method ="post">
        <div class="login">
            
            
                <label for="usermail">E-mail address:</label>
                <input type="text" id="usermail" name="mail" placeholder="Votre mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
                <span class="error">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == 1) {
                        echo("This email address is already in use<br>");
                    }
                }
                ?>
                </span>
            
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Your password.." required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Your password must contain 8 characters including at least one capital letter, one special character and one number"><br>

                <label for="password2">Confirm your password:</label>
                <span class="error">
                <?php
                if (isset($_GET["error"])) {
                   if ($_GET["error"] == 2) {
                        echo("<br>Please enter two identical passwords.");
                    }
                }
                ?>
                </span>
                <input type="password" id="password2" name="password2" placeholder="Confirm your password.." required="required"><br>
            
          </div>

          <div class="login">
                <label for="nom">Last Name:</label>

                <input type="text" id="nom" name="nom" placeholder="Your last name.." required="required"><br>

                <label for="prenom">First name:</label>
                <input type="text" id="prenom" name="prenom" placeholder="Your first name.." required="required"><br>
                
                <label for="nobjet">Object number:</label>
                <input type="text" id="nobjet" name="nobjet" placeholder="Your object number.." required="required"><br>
            
          </div>
          <input type="submit" value="Register">
        </form>
    </div>
    


    <?php
        include 'footer.html';
    ?>
</body>
</html>