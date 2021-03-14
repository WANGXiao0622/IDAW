
<?php
    require_once "template_header.php" ;
    require_once "template_menu.php" ;
    $currentPageId = 'accueil';
    $currentLanguage = 'en';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) {
        $currentLanguage = $_GET['lang'];
    }
?>

<header class="title_type">
    <h1>WANG Xiao</h1>
</header>

<div>
    <a href="https://www.linkedin.com/in/xiao-wang-0b258618b/">
        <img src="/TP2/images/linkedin.png" style="float:right" width="150" height="64">
    </a>
</div>

<div>
    <?php
    renderMenuToHTML($currentPageId, $currentLanguage);
    ?>
</div>

<section class="corps">
    <?php
    $pageToInclude = $currentLanguage . "/" . $currentPageId . ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else {
        require_once("error.php");
    }
    ?>
</section>

<?php
    require_once("template_footer.php");
?>