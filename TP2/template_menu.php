<?php
function renderMenuToHTML($currentPageId, $currentLanguage) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'projets' => array('Mes Projets'),
    );
    echo '<div class="bloc_type">';
    echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo "<li><a id='currentpage' href='index.php?page=" . $pageId . "&lang=" . $currentLanguage . "'>" . $pageParameters[0] . "</a></li>";
        } else {
            echo "<li><a href='index.php?page=" . $pageId . "&lang=" . $currentLanguage . "'>" . $pageParameters[0] . "</a></li>";
        }
    }


    if ($currentLanguage == "en") {
        echo "<li><a href='index.php?page=" . $currentPageId . "&lang=fr'>fr</a></li>";
    } else {
        echo "<li><a href='index.php?page=" . $currentPageId . "&lang=en'>en</a></li>";
    }
    echo "</ul>";
    echo '</div>';
    

}
?>