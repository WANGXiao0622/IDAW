<?php
    if(isset($_COOKIE["user_style"])) {
        //regularization:
        setcookie("user_style", "", time() - 1);
        
        setcookie("user_style", "default", time() + 3600);
    } else {
        setcookie("user_style", "default", time() + 3600);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            $stylesheetname = "'" . $_COOKIE["user_style"] . ".css'";
            echo "<link rel='stylesheet' href=" . $stylesheetname .">";
            //int SetCookie(string name, string value, int expire, string path, string domain, int secure);
        ?>
        <title>WANG Xiao</title>
    </head>
    <body>
        <form id="style_form" action="SetCookie.php" method="POST">
            <select name="css">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>

        <div id="style_corpus">
        <?php
            echo "Welcome to the page: " . $_COOKIE["user_style"] ;
        ?>
        </div>

        <div id="footer">
            Site realized by WANG Xiao TP3_cookies
        </div>
    </body>
</html>