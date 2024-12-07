<?php
    /**
     * Set site wide options and cpnfigurations in this file
     * File must be included before any code on each page
    **/
    
    /**
     * Get and set Page Full URL
     * $page_url
    **/
    
    $page_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    /**
     * Set Cursor Preference on or off
     * Options: Boolean (true,false)
     * True to turn on, and False to switch Off the feature
    **/
    
    $cursor_animation = TRUE;
    
    /**
     * Set Preloader Preference on or off
     * Options: Boolean (true,false)
     * True to turn on, and False to switch Off the feature
    **/
    
    $preloader = TRUE;
    
    /**
     * Set Theme Mode Button Preference on or off to change skin from light to dark
     * Options: Boolean (true,false)
     * True to turn on, and False to switch Off the feature
     * default = FALSE
    **/
    
    $theme_mode_switch = FALSE;
    
    /**
     * Set Theme Scroll Up ( Back to top ) Button Preference on or off
     * Options: Boolean (true,false)
     * True to turn on, and False to switch Off the feature
     * default = TRUE
    **/
    
    $theme_scroll_up = TRUE;
    
    
    function limit_text($text, $limit) {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos   = array_keys($words);
            $text  = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }
?>