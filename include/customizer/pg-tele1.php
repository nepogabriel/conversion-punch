<?php
function gc_pgtele1_customizer( $wp_customize ) {

    //SETTINGS
    //Texts
    $wp_customize->add_setting('gc_title_1', array('default' => ''));
    $wp_customize->add_setting('gc_description_1', array('default' => ''));
    $wp_customize->add_setting('gc_cta_1', array('default' => ''));
    $wp_customize->add_setting('gc_txt_btn_1', array('default' => ''));
    $wp_customize->add_setting('gc_obs_1', array('default' => ''));

    //Colors
    $wp_customize->add_setting('gc_bgl_1', array('default' => '#40007c'));
    $wp_customize->add_setting('gc_bgr_1', array('default' => '#32afed'));
    $wp_customize->add_setting('gc_btn_1', array('default' => '#32afed'));
    $wp_customize->add_setting('gc_btn_hover_1', array('default' => '#002749'));
    $wp_customize->add_setting('gc_btn_txt_1', array('default' => '#fff'));

    //Panel
    $wp_customize->add_panel('gc_tele_panel', array(
        'title' => 'Pages Telagram',
        'priority' => 50
    ));

    //Sections
    $wp_customize->add_section('gc_tele1_section', array(
        'title' => 'Page 1 Telegram',
        'priority' => 1,
        'panel' => 'gc_tele_panel'
    ));

    //Controllers
    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_title_1', 
            array(
                'label'      => 'Título Principal',
                'section'    => 'gc_tele1_section',
                'settings'   => 'gc_title_1'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_description_1', 
            array(
                'label'      => 'Descrição Principal',
                'section'    => 'gc_tele1_section',
                'settings'   => 'gc_description_1'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_cta_1', 
            array(
                'label'      => 'Chamada para Ação',
                'section'    => 'gc_tele1_section',
                'settings'   => 'gc_cta_1'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_txt_btn_1', 
            array(
                'label'      => 'Texto do Botão',
                'section'    => 'gc_tele1_section',
                'settings'   => 'gc_txt_btn_1'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_obs_1', 
            array(
                'label'      => 'Texto Observação',
                'section'    => 'gc_tele1_section',
                'settings'   => 'gc_obs_1'
            )
        ) 
    );

    //COLORS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bgl_1',
            array(
                'label' => 'Background da Esquerda',
                'section' => 'gc_tele1_section',
                'settings' => 'gc_bgl_1',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bgr_1',
            array(
                'label' => 'Background da Direita',
                'section' => 'gc_tele1_section',
                'settings' => 'gc_bgr_1',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_txt_btn_1',
            array(
                'label' => 'Cor do Texto do Botão',
                'section' => 'gc_tele1_section',
                'settings' => 'gc_txt_btn_1',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_btn_1',
            array(
                'label' => 'Cor 1 do Botão',
                'section' => 'gc_tele1_section',
                'settings' => 'gc_btn_1',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_btn_hover_1',
            array(
                'label' => 'Cor 2 do Botão',
                'section' => 'gc_tele1_section',
                'settings' => 'gc_btn_hover_1',
            )
        )
    );

}