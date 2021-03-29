<!DOCTYPE html>
<html>
	<head>
		<title>Cours PHP/MySQL</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="cours.css">
	</head>

<body>
	<h1>Bases de donnée MySQL</h1>
	<?php
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        $dbname = 'idaw';

        $conn = new mysqli($servername, $username, $password,$dbname);

		if ($conn->connect_error) {
    		die("Erreur: " . $conn->connect_error);
		} 
		echo 'Connexion réussie'."<br>";
		$sql = 'select * from User';
		$datarow = $conn->query($sql);
		echo "<table>";
		if ($datarow->num_rows > 0){
			while ($row = $datarow->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["login"]."</td>";
				echo "<td>".$row["password"]."</td>";
				echo "<td>".$row["pseudo"]."</td>";
				echo "</tr>";
			}
		}
		else{
			echo "error";
		}
		echo "</table>";
		$conn->close();
	?>

</body>
</html>