
<?php require_once('template_header.php');?>

        

            <div class="title_type">
                <h1 class="title">WANG Xiao</h1>
            </div>

            <div>
                <a href="https://www.linkedin.com/in/xiao-wang-0b258618b/">
                    <img src="/TP2_php/linkedin.png" style="float:right" width="150" height="64">
                </a>
                <div class="corpus" style="float:right">Contact me:</div>
            </div>

            <?php
                require_once('template_menu.php');
                $currentPageId = 'index';
                $currentPageLang = 'en';
                if(isset($_GET['page'])) { 
                    $currentPageId = $_GET['page'];
                }
                if(isset($_GET['lang'])) {
                    $currentLanguage = $_GET['lang'];
                }

                renderMenuToHTML($currentPageId );
            ?>

            <section class="corpus">
                <?php
                    if ($currentPageLang =='en'){
                        $pageToInclude = "en/" . $currentPageId . "_corpus.php";
                    } else{
                        $pageToInclude = "fr/" . $currentPageId . "_corpus.php";
                    }

                    if(is_readable($pageToInclude)) 
                        require_once($pageToInclude);
                    else 
                    require_once("error.php");
                ?>

        <?php require_once('template_footer.php'); ?>

