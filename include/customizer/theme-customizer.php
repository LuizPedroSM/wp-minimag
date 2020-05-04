<?php 
require get_template_directory().'/include/customizer/social.php';

function bm_customize_register($wp_customizer){
    bm_social_customizer($wp_customizer);
}