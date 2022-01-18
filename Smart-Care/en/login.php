<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel='stylesheet' href='../css/common.css'>
    <link rel="shortcut icon" href="img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>Login</title>
</head>
<body>
    
    <?php
        include '../php/display/en/navbar.php';
        
        if (isset($_GET['error']) && $_GET['error']==5){
            echo("<span class='errorcenter'><p>You must be logged in to access the leaderboard</p></span>");
        }
        if (isset($_GET['error']) && $_GET['error']==6){
            echo("<span class='errorcenter'><p>You must be logged in to access the dashboard</p></span>");
        }
        if (isset($_GET['error']) && $_GET['error']==7){
            echo("<span class='errorcenter'><p>You must be logged in to access your account</p></span>");
        }
    ?>
    <div class="form">
        <div class="login">
            <h2>Connexion</h2>
            <form action="../php/loginform.php" method ="post">
                <label for="usermail">E-mail address:</label>
                <input type="text" id="usermail" name="mail" placeholder="Your e-mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
          
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Your password..">
                <span class="error">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == 3) {
                        echo("Wrong e-mail address/wrong password<br><br>");
                    }
                    if ($_GET["error"] == 4) {
                        echo("This user does not exist<br><br>");
                    }
                }
                ?>
                </span>
                <input type="submit" value="Login">
            </form>
            <p><br><a href='../register.php'>No account yet? Join us</a></p>
          </div>
    </div>
    


    <?php
        include 'footer.html';
    ?>
</body>
</html>