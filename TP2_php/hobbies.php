<?php
/*
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hello xiao</title>
        <link rel="stylesheet" href="styles.css" title ="test" charset="utf-8">
        

    </head>

    <body>
    */
        require_once('template_header.php');
    ?>

        <div class="page">

            <div class="title_type">
                <h1 class="title">WANG Xiao</h1>
                <a class="link_linkedin" href="https://www.linkedin.com/in/xiao-wang-0b258618b/">my link linkedin</a>
            </div>

            <?php
            /*
            <div class="bloc_type">
                <ul class="menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="cv.php">My CV</a></li>
                    <li><a href="hobbies.php">My hobbies</a></li>
                </ul>
            </div>
            */
                require_once('template_menu.php'); 
            ?>

            <div class="corpus">
                <h2>My hobbies:</h2>
                <p>  MUSIC!!! 
                    and collecting vinly records
                </p>
            </div>

            <?php
            /*
            <div class="footer_type">
                site realized by html and css
            </div>
            */
                require_once('template_footer.php'); 
            ?>


        </div>

    </body>

</html>