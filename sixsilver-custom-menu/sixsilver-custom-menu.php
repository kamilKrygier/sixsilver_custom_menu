<?php
/**
* Plugin Name: Wordpress SIXSILVER Menu
* Description: Custom menu created for SIXSILVER
* Version: 1.0.0
* Author: Kamil Krygier
* Author URI: https://www.linkedin.com/in/kamil-krygier-132940166
**/ 

function sixsilverMenu()
{
    // if(wp_is_mobile())
        include('mobile/mobile.php');
    // else if(!wp_is_mobile())
        include('desktop/desktop.php');
}
add_action('x_after_site_begin', 'sixsilverMenu', 100);