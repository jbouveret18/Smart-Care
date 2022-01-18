<?php
if (isset($_GET["result"])) {
    if ($_GET["result"] == 0) {
        echo("<span class='error'><p>Wrong password</p></span>  ");
    }
    if ($_GET["result"] == 1) {
        echo("<span class='succes'><p>Password successfully changed</p></span>");
    }
    if ($_GET["result"] == 2) {
      echo("<span class='error'><p>The email address is already in use</p></span>");
    }
    if ($_GET["result"] == 3) {
      echo("<span class='succes'><p>Email address changed successfully</p></span>");
    }
  }
?>