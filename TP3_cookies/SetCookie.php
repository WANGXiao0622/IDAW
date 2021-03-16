<?php
    if(isset($_COOKIE["user_style"])) {
        setcookie("user_style", "", time() - 1);
    }
    $user_css = $_POST["css"];
    setcookie("user_style", $user_css, time() + 3600);
    echo $_COOKIE["user_style"];

    header("location: index.php");
?>