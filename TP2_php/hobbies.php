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

            <div class="corpus">
                <h2>My hobbies:</h2>
                <p>  MUSIC!!! 
                    and collecting vinly records
                </p>
            </div>

            <?php require_once('template_footer.php'); ?>