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
                <a href="https://www.linkedin.com/in/xiao-wang-0b258618b/"><img src="/Users/wangxiao/IDAW/TP2_php/linkedin.png" style="float:right" width="128" height="64">
                
                </a>
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
                <h2>Who am I?</h2>
                <p>  A student in IMT LILLE DOUAI who know nothing about web developement</p>
            </div>

            <div class="footer_type">
                site realized by html and css
            </div>


        </div>

    </body>

</html>
