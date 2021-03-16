<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'idaw';

    
    //On établit la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    //On vérifie la connexion
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    echo 'Connexion réussie'."<br>";

   //not null
	if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['confirmpsw'])) {

		
		$insLogin=$_POST['login'];
		$insPwd=$_POST['password'];
		$confirmpsw=$_POST['confirmpsw'];
		$pseudo=$_POST['pseudo'];

		if(strcmp($insPwd, $confirmpsw)!=0){
			echo "Please enter the same password!";
		}
		else{
			//insert
			$sql = "INSERT INTO User (login,password,pseudo) VALUES(\"".$insLogin."\",\"".$insPwd."\",\"".$pseudo."\")";
			// si effectuer
			if($conn->query($sql)){
				echo "inscription réussi";
			}
			else{
				echo "error";
			}
		}

	} else{
		echo "Merci de remplir tout les casse";
	}
	$conn->close();
?>