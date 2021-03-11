<?php
/*
<nav class="bloc_type">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="hobbies.php">My hobbies</a></li>
    </ul> 
</nav>
    */
?>

<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
        $mymenu = array( // idPage titre
            'index' => array( 'accueil' ), 
            'cv' => array( 'cv' ),
            'hobbies' => array('hobbies') 
        );
        foreach($mymenu as $pageId => $pageParameters){
            if($pageId='index'){
                echo "
                <div class="bloc_type">
                    <ul>
                        <li><a id="currentpage" href="css_index.html">Accueil</a></li>
                        <li><a href="css_cv.html">my CV</a></li>
                        <li><a href="css_hobbies.html">My hobbies</a></li>
                    </ul>
                </div>
                "
            }
            if($pageId='cv'){
                echo "
                <div class="bloc_type">
                    <ul>
                        <li><a href="css_index.html">Accueil</a></li>
                        <li><a id="currentpage" href="css_cv.html">my CV</a></li>
                        <li><a href="css_hobbies.html">My hobbies</a></li>
                    </ul>
                </div>
                "
            }
            if($pageId='hobbies'){
                echo "
                <div class="bloc_type">
                    <ul>
                        <li><a href="css_index.html">Accueil</a></li>
                        <li><a href="css_cv.html">my CV</a></li>
                        <li><a id="currentpage" href="css_hobbies.html">My hobbies</a></li>
                    </ul>
                </div>
                "
            }
            
        }

    }
?>
