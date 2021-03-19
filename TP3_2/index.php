
<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $con = mysqli_connect($servername, $username, $password);

    if (!$con) {
        die('...Could not connect: ' . mysql_error() . "<br/>");
    } else {
        echo "...Connected to MySQL Now. <br/>";
    }

    if (mysqli_query($con, "CREATE DATABASE tp_idaw3_2")) {
        echo "...Database idaw_user created.<br/>";
    } else {
        echo "...Error creating database: " . mysqli_error($con) . "<br/>";
    }

    mysqli_select_db($con, "tp_idaw3_2");
    $sql = "CREATE TABLE Users (
        id int NOT NULL AUTO_INCREMENT,

        Login varchar(20),
        Password varchar(20),
        pseudo varchar(20),
        primary key (id)
    )";
    if(mysqli_query($con, $sql)) { 
        echo "...Table Users created successfully. <br/>"; 
    } else {
        echo "...Could not create table: ". mysqli_error($con) . "<br/>"; 
    }

    $sql = "INSERT INTO Users (id, Login, Password) VALUES ('1', 'alice', 'admin', 'admin')";
    mysqli_query($con, $sql);
    $sql = "INSERT INTO Users (id, Login, Password) VALUES ('2', 'bob', 'admin', 'admin')";
    mysqli_query($con, $sql);
    $sql = "INSERT INTO Users (id, Login, Password) VALUES ('3', 'tom', 'admin', 'admin')";
    mysqli_query($con, $sql);
    echo "...Three administrator accounts have been generated. <br/>";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Access_Database</title>
    </head>
    <body>
        <p></p>

    <form id="login_form" action="testConnexion.php" method="POST">
        <table> 
            <tr>
                <th>Login :</th>
                <td><input type="text" name="login"></td>
            </tr> 
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="password"></td>
            </tr> 
            <tr>
                <th>Pseudo :</th>
                <td><input type="text" name="pseudo"></td>
            </tr>
            <tr>	
                <th></th>
                <td><input type="submit" value="S'inscrire" /></td>
            </tr>
        </table>
    </form>
    </body>
</html>