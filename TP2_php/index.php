
<?php require_once('template_header.php');?>

        <div class="page">

            <div class="title_type">
                <h1 class="title">WANG Xiao</h1>
                <a href="https://www.linkedin.com/in/xiao-wang-0b258618b/">
                    <img src="/Users/wangxiao/IDAW/TP2_php/linkedin.png" style="float:right" width="128" height="64">
                </a>
            </div>

            <?php
                require_once('template_menu.php');
                $currentPageId = 'index';
                if(isset($_GET['page'])) { 
                    $currentPageId = $_GET['page'];
                }

                renderMenuToHTML($currentPageId );
            ?>

            <section class="corpus">
                <?php
                    $pageToInclude = $currentPageId . ".php";
                    if(is_readable($pageToInclude)) 
                        require_once($pageToInclude);
                    else 
                    require_once("error.php");
                ?>

            <?php require_once('template_footer.php'); ?>


        </div>

    </body>

</html>
