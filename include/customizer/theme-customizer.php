<?php 
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function bm_customize_register($wp_customizer){

    $wp_customizer->get_section('title_tagline')->title = 'Informações Principais';
    $wp_customizer->get_section('custom_css')->description = '';

    $wp_customizer->add_panel('opcoes', array(
        'title' => 'Opções do Tema',
        'priority' => 1
    ));
    bm_social_customizer($wp_customizer);
    bm_layout_customizer($wp_customizer);
    // echo '<pre>';
    // print_r($wp_customizer);
    // echo '</pre>';
}