<?php
function gc_social_customizer( $wp_customize ) {

    //Settings
    $wp_customize->add_setting('gc_facebook', array('default' => 'https://facebook.com/'));
    $wp_customize->add_setting('gc_youtube', array('default' => 'https://youtube.com/'));
    $wp_customize->add_setting('gc_instagram', array('default' => 'https://instagram.com/'));

    //Sections
    $wp_customize->add_section('gc_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => 4
    ));

    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'gc_social_section',
                'settings' => 'gc_facebook',
                'type' => 'text' //opcional, pois por padrão já é 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_youtube',
            array(
                'label' => 'Link do YouTube',
                'section' => 'gc_social_section',
                'settings' => 'gc_youtube',
                'type' => 'text' //opcional, pois por padrão já é 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'gc_social_section',
                'settings' => 'gc_instagram',
                'type' => 'text' //opcional, pois por padrão já é 'text'
            )
        )
    );

}