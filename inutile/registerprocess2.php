<?php 
                session_start();
                $_mail = $_SESSION['mail'];
                $_pass1 = $_SESSION['pass'];
                $_nom = htmlspecialchars($_POST["nom"], ENT_COMPAT,'ISO-8859-1', true);
                $_prenom = htmlspecialchars($_POST["prenom"], ENT_COMPAT,'ISO-8859-1', true);
                $_nobjet =  htmlspecialchars($_POST["nobjet"], ENT_COMPAT,'ISO-8859-1', true);

                if ($_nom!=null AND $_prenom!=null AND $_nobjet!=null) {

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "app";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO utilisateur(Nom,Prenom,Mail,Password,numero_objet) VALUES ('$_nom', '$_prenom', '$_mail','$_pass1',$_nobjet)";

                    if ($conn->query($sql) === TRUE) {
                        header('Location: ../login.php');
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
?>