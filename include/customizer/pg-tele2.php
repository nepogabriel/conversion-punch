<?php
function gc_pgtele2_customizer( $wp_customize ) {

    //SETTINGS
    //Texts
    $wp_customize->add_setting('gc_title_2', array('default' => ''));
    $wp_customize->add_setting('gc_description_2', array('default' => ''));
    $wp_customize->add_setting('gc_cta_2', array('default' => ''));
    $wp_customize->add_setting('gc_txt_btn_2', array('default' => ''));
    $wp_customize->add_setting('gc_obs_2', array('default' => ''));

    //Colors
    $wp_customize->add_setting('gc_bgl_2', array('default' => '#00bc96'));
    $wp_customize->add_setting('gc_bgr_2', array('default' => '#32afed'));
    $wp_customize->add_setting('gc_btn_2', array('default' => '#32afed'));
    $wp_customize->add_setting('gc_btn_hover_2', array('default' => '#002749'));
    $wp_customize->add_setting('gc_btn_txt_2', array('default' => '#fff'));

    //Sections
    $wp_customize->add_section('gc_tele2_section', array(
        'title' => 'Page 2 Telegram',
        'priority' => 2,
    ));

    //Controllers
    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_title_2', 
            array(
                'label'      => 'Título Principal',
                'section'    => 'gc_tele2_section',
                'settings'   => 'gc_title_2'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_description_2', 
            array(
                'label'      => 'Descrição Principal',
                'section'    => 'gc_tele2_section',
                'settings'   => 'gc_description_2'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_cta_2', 
            array(
                'label'      => 'Chamada para Ação',
                'section'    => 'gc_tele2_section',
                'settings'   => 'gc_cta_2'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_txt_btn_2', 
            array(
                'label'      => 'Texto do Botão',
                'section'    => 'gc_tele2_section',
                'settings'   => 'gc_txt_btn_2'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_obs_2', 
            array(
                'label'      => 'Texto Observação',
                'section'    => 'gc_tele2_section',
                'settings'   => 'gc_obs_2'
            )
        ) 
    );

    //COLORS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bgl_2',
            array(
                'label' => 'Background da Esquerda',
                'section' => 'gc_tele2_section',
                'settings' => 'gc_bgl_2',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bgr_2',
            array(
                'label' => 'Background da Direita',
                'section' => 'gc_tele2_section',
                'settings' => 'gc_bgr_2',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_txt_btn_2',
            array(
                'label' => 'Cor do Texto do Botão',
                'section' => 'gc_tele2_section',
                'settings' => 'gc_txt_btn_2',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_btn_2',
            array(
                'label' => 'Cor 2 do Botão',
                'section' => 'gc_tele2_section',
                'settings' => 'gc_btn_2',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_btn_hover_2',
            array(
                'label' => 'Cor 2 do Botão',
                'section' => 'gc_tele2_section',
                'settings' => 'gc_btn_hover_2',
            )
        )
    );

}