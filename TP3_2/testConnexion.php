
<?php
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';

        $conn = new mysqli($servername, $username, $password);
        mysqli_select_db($con, "tp_idaw3_2");

		$sql = 'select * from User';
		$datarow = $conn->query($sql);

        $getUsers = mysqli_query($con, $sql);
        echo "<table border='1'><caption><b>All existing accounts</b></caption><tr><th>ID</th><th>User Name</th><th>Password</th><th>Pseudo</th></tr>";
        while($row = mysqli_fetch_array($getUsers, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Login'] . "</td>";
            echo "<td>" . $row['Password'] . "</td>";
            echo "<td>" . $row['pseudo'] . "</td>";
            echo "</tr>";
        }

		echo "</table>";
		$conn->close();

        $result = $conn->query($sql);
         
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            echo "0 result";
        }

	?>

