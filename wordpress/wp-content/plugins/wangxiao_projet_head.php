<?php

/*
Plugin Name: wangxiao_projet_head
Description: This is a plugin which I wrote personally. This is used for the content after the header in the page Projet.
Author: wang xiao
Version: 1.7.2
*/

    function BackToTop(){
        echo '<a href="#"><div style="width:40px;height:40px;line-height:40px;border:2px solid #87CEEB;bottom:10px;right:30px;position:fixed;text-align:center;">Top</div></a>';
    }
        
    add_action('wp_footer','BackToTop')
    
    
?>
