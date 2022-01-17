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