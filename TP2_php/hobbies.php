<?php require_once('template_header.php');?>


            <div class="title_type">
                <h1 class="title">WANG Xiao</h1>
                <a class="link_linkedin" href="https://www.linkedin.com/in/xiao-wang-0b258618b/">my link linkedin</a>
            </div>

            <?php
                require_once('template_menu.php');
                $currentPageId = 'hobbies';
                if(isset($_GET['page'])) { 
                    $currentPageId = $_GET['page'];
                }
                renderMenuToHTML($currentPageId );
            ?>
            
            <section class="corpus">
                <?php
                    $pageToInclude = "fr/" . $currentPageId . "_corpus.php";
                    if(is_readable($pageToInclude)) 
                        require_once($pageToInclude);
                    else 
                    require_once("error.php");
                ?>

            <?php require_once('template_footer.php'); ?>