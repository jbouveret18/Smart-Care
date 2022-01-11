<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel='stylesheet' href='css/common.css'>
    <link rel="shortcut icon" href="img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>connection</title>
</head>
<body>
    
    <?php
        include 'php/navbar.php';
        
        if (isset($_GET['error']) && $_GET['error']==5){
            echo("<span class='errorcenter'><p>You must be logged in to access the leaderboard</p></span>");
        }
        if (isset($_GET['error']) && $_GET['error']==6){
            echo("<span class='errorcenter'><p>You must be logged in to access the leaderboard</p></span>");
        }
        if (isset($_GET['error']) && $_GET['error']==7){
            echo("<span class='errorcenter'><p>You must be logged in to access the leaderboard</p></span>");
        }
    ?>
    <div class="form">
        <div class="login">
            <h2>Connection</h2>
            <form action="php/loginform.php" method ="post">
                <label for="usermail">e-mail Address:</label>
                <input type="text" id="usermail" name="mail" placeholder="your mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
          
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password..">
                <span class="error">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == 3) {
                        echo("wrong mail address mail/wrong password<br><br>");
                    }
                    if ($_GET["error"] == 4) {
                        echo("this username doesn't exist <br><br>");
                    }
                }
                ?>
                <input type="submit" value="to log in ">
            </form>
          </div>
    </div>
    


    <footer>
        <p>©2021 SmartCare</p>
    </footer>
</body>
</html>