<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../img/blank.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');
    </style>
    <title>Accueil</title>
</head>
<body>

    <?php
        include '../php/display/en/navbar.php';
        ?>

    <div class="middlemainflex">
    <div class="leftflex">
        <div class="txt1">Improve</div></br>
        <div class="txt2">Your <span class="spx">well-being</span></div></br>
        <div class="txt3">Thanks to our well-being assistant and the 4 sensors present on our connected watch</div></br>
        <button class="rect" href="#">Join us</button>
     </div>
    <div class="rightflex">
        <img src="../img/watch1.svg" class="watch1">
        <img src="../img/watch2.svg" class="watch2">
    </div>
    </div>
     
    <div class="montre" id="discover">
        <div class="one"><img src="../img/montre_icon.png" class="montre_pic"></div>
        <div class="two"><h1>Light, fast and powerful</h1>
            <p>SmartCare is an assistant that will accompany you in your quest for well-being. Using the many sensors present on our new generation SmartCare watch, our assistant will guide you through many tips and valuable aids according to the data it collects.
                 <br><br>It will significantly improve your lifestyle by analyzing the data of the environment around you and alert you if there is any risk to your health.
                 <br><br>Join and challenge your friends in having the healthiest lifestyle possible
            </p>
        </div>
        <div class="three">
            <img src="../img/heart.svg" >
            <h3>Heart sensor</h3>
            Calculate heart rate and work out your physical condition based on the activities you perform
        </div>
        <div class="four">
            <img src="../img/speaker.svg" >
            <h3>Sound sensor</h3>
            Measures the sound power of your environment and detects potential risks of damage to your ear
        </div>
        <div class="five">
            <img src="../img/heat.svg" >
            <h3>Body temperature sensor</h3>
            Takes your body temperature and checks that you are fit and healthy
        </div>
        <div class="six">
            <img src="../img/gaz.svg" >
            <h3>Gas sensor</h3>
            Analyzes the ambient air and detects if there is the presence of gases harmful to your health
        </div>
        <div class="sept"> 
        </div>
      </div>
      <footer class="footer">
        <div class="footerbox1">@2022 SmartCare</div>
        <div class="barre"></div>
        <div class="footerbox2">
            <a href="about.php" class="link1">About</a>
            <a href="help.php" class="link1">Help</a>
            <a href="contact.php" class="link1">Contact us</a>
            <a href="confidentiality.php" class="link1">Confidentiality</a>
            <a href="#"><img src="../img/Instagram Copy 4.svg" class="Instagram Copy 4"></a>
            <a href="#"><img src="../img/Instagram Copy 3.svg" class="Instagram Copy 3"></a>
            <a href="#"><img src="../img/Instagram Copy 2.svg" class="Instagram Copy 2"></a>
            <a href="#"><img src="../img/Instagram Copy.svg" class="Instagram Copy"></a>
            <a href="#"><img src="../img/Instagram.svg" class="Instagram"></a>
    </footer>
</body>
</html>