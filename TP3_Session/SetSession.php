<?php
    session_start();
    //$_SESSION["username"] = $_POST["username"];
    //$_SESSION["remark"] = $_POST["remark"];
    //echo "<h1>Bienvenu ".$_SESSION["username"]."</h1>";
    echo "<h1>Bienvenu </h1>";
    header("Location: account.php");
?>