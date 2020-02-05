<?php
function gb_social_customizer( $wp_customize ) {

    //Settings
    $wp_customize->add_setting('gb_facebook', array('default' => 'https://facebook.com/'));
    $wp_customize->add_setting('gb_youtube', array('default' => 'https://youtube.com/'));
    $wp_customize->add_setting('gb_instagram', array('default' => 'https://instagram.com/'));

    //Sections
    $wp_customize->add_section('gb_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => 4
    ));

    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gb_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'gb_social_section',
                'settings' => 'gb_facebook',
                'type' => 'text' //opcional, pois por padrão já é 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gb_youtube',
            array(
                'label' => 'Link do YouTube',
                'section' => 'gb_social_section',
                'settings' => 'gb_youtube',
                'type' => 'text' //opcional, pois por padrão já é 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gb_instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'gb_social_section',
                'settings' => 'gb_instagram',
                'type' => 'text' //opcional, pois por padrão já é 'text'
            )
        )
    );

}