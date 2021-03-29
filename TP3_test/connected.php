<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'idaw';

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    //On établit la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);
    //On vérifie la connexion
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    echo 'Connexion réussie'."<br>";

    //not null
    if(isset($_POST['login']) && isset($_POST['password'])){
        $tryLogin = $_POST['login'];
        $tryPwd = $_POST['password'];
        
        // si login existe et password correspond
        $sql = "SELECT login,password FROM User WHERE login=\"".$tryLogin."\"AND password=\"".$tryPwd."\"";
        $result = $conn->query($sql);
        $num = $result->num_rows;
        if($num>0) {
            $successfullyLogged= true;
            $login = $tryLogin;
        }
        else{
            $errorText = "Erreur de login ou password, please try again";
        }
    }
    else{
        $errorText = "Merci d'utiliser le formulaire de login";
    }
    if(!$successfullyLogged){
        echo $errorText;
    }
    else{
        echo "<h1>Bienvenue".$login."</h1>";
    }
    $conn->close();
?>