
<?php require_once('template_header.php');?>

        <div class="page">

            <div class="title_type">
                <h1 class="title">WANG Xiao</h1>
                <a href="https://www.linkedin.com/in/xiao-wang-0b258618b/"><img src="/Users/wangxiao/IDAW/TP2_php/linkedin.png" style="float:right" width="128" height="64"></a>
            </div>

            <?php
                require_once('template_menu.php');
                $currentPageId = 'accueil';
                if(isset($_GET['page'])) { 
                    $currentPageId = $_GET['page'];
                }

                renderMenuToHTML($currentPageId );
            ?>
<!--
            <div class="corpus">
                <h2>Who am I?</h2>
                <p>  A student in IMT LILLE DOUAI who know nothing about web developement</p>
            </div>
-->
            <section class="corpus">
                <?php
                    $pageToInclude = $currentPageId . ".php";
                    if(is_readable($pageToInclude)) 
                        require_once($pageToInclude);
                    else 
                    require_once("error.php");
                ?>


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
