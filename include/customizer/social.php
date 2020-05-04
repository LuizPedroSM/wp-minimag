<?php 
function bm_social_customizer($wp_customizer){
    // Settings
    $wp_customizer->add_setting('bm_facebook', array('default' => ''));
    $wp_customizer->add_setting('bm_googleplus', array('default' => ''));
    $wp_customizer->add_setting('bm_instagram', array('default' => ''));
    $wp_customizer->add_setting('bm_twitter', array('default' => ''));
    $wp_customizer->add_setting('bm_youtube', array('default' => ''));

    // Sections
    $wp_customizer->add_section('bm_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => '1',
        'panel' => 'opcoes'
    ));
    // Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_facebook',
            array (
                'label' => 'Link do Facebook',
                'section' => 'bm_social_section',
                'settings' => 'bm_facebook',
                'type' => 'text',
            )
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_googleplus',
            array (
                'label' => 'Link do Google Plus',
                'section' => 'bm_social_section',
                'settings' => 'bm_googleplus',
                'type' => 'text',
            )
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_instagram',
            array (
                'label' => 'Link do Instagram',
                'section' => 'bm_social_section',
                'settings' => 'bm_instagram',
                'type' => 'text',
            )
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_twitter',
            array (
                'label' => 'Link do Twitter',
                'section' => 'bm_social_section',
                'settings' => 'bm_twitter',
                'type' => 'text',
            )
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_youtube',
            array (
                'label' => 'Link do Youtube',
                'section' => 'bm_social_section',
                'settings' => 'bm_youtube',
                'type' => 'text',
            )
        )
    );
}