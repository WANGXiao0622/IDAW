<!--
<div class="bloc_type">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="hobbies.php">My hobbies</a></li>
    </ul> 
</div>   
-->

<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui definit la structure du site
        $mymenu = array(
        // idPage titre
            'index' => array('accueil'),
            'cv' => array('cv'),
            'hobbies' => array('hobbies')  
        );
        echo '<div class="bloc_type">';
        echo "<ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            if ($pageId == $currentPageId) {
                echo "<li><a id='currentpage' href='" . $pageId . ".php'>" . $pageParameters[0] . "</a></li>";
            } else {
                echo "<li><a href='" . $pageId . ".php'>" . $pageParameters[0] . "</a></li>";
            }
        }
        echo "</ul>";
        echo "</div>";
}
?>
