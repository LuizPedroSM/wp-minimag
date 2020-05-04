<?php 

function bm_layout_customizer($wp_customizer){
    // Settings
    $wp_customizer->add_setting('bm_topmenu_show', array('default' => 'yes'));
    $wp_customizer->add_setting('bm_search_show', array('default' => 'yes'));
    $wp_customizer->add_setting('bm_privacy_url', array('default' => ''));

    // Sections
    $wp_customizer->add_section('bm_layout_section', array(
        'title' => 'Opções de Layout',
        'priority' => 2,
        'panel' => 'opcoes'
    ));

    // Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_topmenu_show',
            array(
                'label' => 'Mostrar Menu Superior',
                'section' => 'bm_layout_section',
                'settings' => 'bm_topmenu_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'sim'
                )
            )
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_search_show',
            array(
                'label' => 'Mostrar Busca',
                'section' => 'bm_layout_section',
                'settings' => 'bm_search_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'sim'
                )
            )
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'bm_privacy_url',
            array(
                'label' => 'Página de politica de privacidade',
                'section' => 'bm_layout_section',
                'settings' => 'bm_privacy_url',
                'type' => 'dropdown-pages',
            )
        )
    );
}