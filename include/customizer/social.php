<?php
function gc_social_customizer( $wp_customize ) {

    //SETTINGS
    //Links
    $wp_customize->add_setting('gc_instagram', array('default' => '#'));
    $wp_customize->add_setting('gc_twitter', array('default' => '#'));
    $wp_customize->add_setting('gc_youtube', array('default' => '#'));
    $wp_customize->add_setting('gc_facebook', array('default' => '#'));
    $wp_customize->add_setting('gc_whatsapp', array('default' => '#'));
    $wp_customize->add_setting('gc_telegram', array('default' => '#'));
    $wp_customize->add_setting('gc_snapchat', array('default' => '#'));
    $wp_customize->add_setting('gc_pinterest', array('default' => '#'));
    $wp_customize->add_setting('gc_googleplus', array('default' => '#'));
    $wp_customize->add_setting('gc_linkedin', array('default' => '#'));
    $wp_customize->add_setting('gc_spotify', array('default' => '#'));
    $wp_customize->add_setting('gc_soundcloud', array('default' => '#'));

    //Sections
    $wp_customize->add_section('gc_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => 4
    ));

    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'gc_social_section',
                'settings' => 'gc_instagram',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_twitter',
            array(
                'label' => 'Link do Twitter',
                'section' => 'gc_social_section',
                'settings' => 'gc_twitter',
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
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'gc_social_section',
                'settings' => 'gc_facebook',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_whatsapp',
            array(
                'label' => 'Link do WhatsApp',
                'section' => 'gc_social_section',
                'settings' => 'gc_whatsapp',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_telegram',
            array(
                'label' => 'Link do Telegram',
                'section' => 'gc_social_section',
                'settings' => 'gc_telegram',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_snapchat',
            array(
                'label' => 'Link do Snapchat',
                'section' => 'gc_social_section',
                'settings' => 'gc_snapchat',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_pinterest',
            array(
                'label' => 'Link do Pinterest',
                'section' => 'gc_social_section',
                'settings' => 'gc_pinterest',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_googleplus',
            array(
                'label' => 'Link do Google Plus',
                'section' => 'gc_social_section',
                'settings' => 'gc_googleplus',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_linkedin',
            array(
                'label' => 'Link do Linkedin',
                'section' => 'gc_social_section',
                'settings' => 'gc_linkedin',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_spotify',
            array(
                'label' => 'Link do Spotify',
                'section' => 'gc_social_section',
                'settings' => 'gc_spotify',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_soundcloud',
            array(
                'label' => 'Link do Soundcloud',
                'section' => 'gc_social_section',
                'settings' => 'gc_soundcloud',
            )
        )
    );

}