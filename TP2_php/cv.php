
<?php require_once('template_header.php');?>


            <div class="title_type">
                <h1 class="title">WANG Xiao</h1>
                <a href="https://www.linkedin.com/in/xiao-wang-0b258618b/">
                    <img src="/Users/wangxiao/IDAW/TP2_php/linkedin.png" style="float:right" width="128" height="64">

                </a>
            </div>

            <?php
                require_once('template_menu.php');
                $currentPageId = 'cv';
                if(isset($_GET['page'])) { 
                    $currentPageId = $_GET['page'];
                }
                renderMenuToHTML($currentPageId );
            ?>

            <div class="corpus">
                <h2>My CV:</h2>

                <img src="/Users/wangxiao/IDAW/TP2_php/cv.jpeg" alt="ice burge" style="float:left" width="256" height="512">
            </div>

            <?php require_once('template_footer.php'); ?>