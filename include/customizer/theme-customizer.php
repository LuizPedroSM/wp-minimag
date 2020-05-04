<?php 
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function bm_customize_register($wp_customizer){
    bm_social_customizer($wp_customizer);
    bm_layout_customizer($wp_customizer);
}