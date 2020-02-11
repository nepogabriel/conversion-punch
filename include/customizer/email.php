<?php
function gc_email_customizer( $wp_customize ) {
    //Settings
    $wp_customize->add_setting('gc_email_home', array('default' => ''));
    $wp_customize->add_setting('gc_emailtop_bg', array('default' => ''));
    //$wp_customize->add_setting('gc_emailtop_bgcolor', array('default' => '#000'));
    $wp_customize->add_setting('gc_email_img', array('default' => ''));
    $wp_customize->add_setting('gc_email_text', array('default' => ''));
    $wp_customize->add_setting('gc_email_text2', array('default' => ''));
    $wp_customize->add_setting('gc_email_textobs', array('default' => ''));
    $wp_customize->add_setting('gc_email_iconobs', array('default' => ''));

    //Panel
    $wp_customize->add_panel('gc_capemail_panel', array(
        'title' => 'Capturas de E-mails',
        'priority' => 5
    ));

    //Sections
    $wp_customize->add_section('gc_captop_section', array(
        'title' => 'Captura de E-mail Topo',
        'priority' => 1,
        'panel' => 'gc_capemail_panel'
    ));

    $wp_customize->add_section('gc_capbottom_section', array(
        'title' => 'Captura de E-mail Baixo',
        'priority' => 10,
        'panel' => 'gc_capemail_panel'
    ));

    /*$wp_customize->add_section('gc_email_section', array(
        'title' => 'E-mail Marketing',
        'priority' => 5,
        'panel' => 'gc_capemail_panel'
    ));*/

    //Controllers
    /*$wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'gc_email_img',
            array(
                'label' => 'Imagem:',
                'section' => 'gc_captop_section',
                'settings' => 'gc_email_img',
                /*O padrão é 150x150
                'width' => '200',
                'height' => '200',
            )
        )
    );*/

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_email_img',
            array(
                'label' => 'Imagem',
                'section' => 'gc_captop_section',
                'settings' => 'gc_email_img'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_email_text',
            array(
                'label' => 'Texto CPA',
                'section' => 'gc_captop_section',
                'settings' => 'gc_email_text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_email_text2',
            array(
                'label' => 'Texto 2 CPA',
                'section' => 'gc_captop_section',
                'settings' => 'gc_email_text2'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_email_textobs',
            array(
                'label' => 'Texto Observação',
                'section' => 'gc_captop_section',
                'settings' => 'gc_email_textobs'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_email_iconobs',
            array(
                'label' => 'Icone Observação',
                'section' => 'gc_captop_section',
                'settings' => 'gc_email_iconobs'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_emailtop_bg',
            array(
                'label' => 'Background IMG',
                'section' => 'gc_captop_section',
                'settings' => 'gc_emailtop_bg'
            )
        )
    );

    /*$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_emailtop_bgcolor',
            array(
                'label' => 'Titulo Background Superior',
                'section' => 'gc_captop_section',
                'settings' => 'gc_emailtop_bgcolor',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_email_home',
            array(
                'label' => 'E-mail Marketing',
                'section' => 'gc_email_section',
                'settings' => 'gc_email_home',
                'type' => 'textarea'
            )
        )
    );*/


}
