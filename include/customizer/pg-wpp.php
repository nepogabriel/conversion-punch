<?php
function gc_pgwpp_customizer( $wp_customize ) {

    //SETTINGS
    //Texts
    $wp_customize->add_setting('gc_title_wpp', array('default' => ''));
    $wp_customize->add_setting('gc_description_wpp', array('default' => ''));
    $wp_customize->add_setting('gc_cta_wpp', array('default' => ''));
    $wp_customize->add_setting('gc_txt_btn_wpp', array('default' => ''));
    $wp_customize->add_setting('gc_obs_wpp', array('default' => ''));

    //Colors
    $wp_customize->add_setting('gc_bgl_wpp', array('default' => '#00bc96'));
    $wp_customize->add_setting('gc_bgr_wpp', array('default' => '#32afed'));
    $wp_customize->add_setting('gc_btn_wpp', array('default' => '#32afed'));
    $wp_customize->add_setting('gc_btn_hover_wpp', array('default' => '#002749'));
    $wp_customize->add_setting('gc_btn_txt_wpp', array('default' => '#fff'));

    //Panel
    // $wp_customize->add_panel('gc_wpp_panel', array(
    //     'title' => 'Pages Telagram',
    //     'priority' => 50
    // ));

    //Sections
    $wp_customize->add_section('gc_wpp_section', array(
        'title' => 'Page WhatsApp',
        'priority' => 200,
        // 'panel' => 'gc_tele_panel'
    ));

    //Controllers
    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_title_wpp', 
            array(
                'label'      => 'Título Principal',
                'section'    => 'gc_wpp_section',
                'settings'   => 'gc_title_wpp'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_description_wpp', 
            array(
                'label'      => 'Descrição Principal',
                'section'    => 'gc_wpp_section',
                'settings'   => 'gc_description_wpp'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_cta_wpp', 
            array(
                'label'      => 'Chamada para Ação',
                'section'    => 'gc_wpp_section',
                'settings'   => 'gc_cta_wpp'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_txt_btn_wpp', 
            array(
                'label'      => 'Texto do Botão',
                'section'    => 'gc_wpp_section',
                'settings'   => 'gc_txt_btn_wpp'
            )
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Control( 
            $wp_customize, 
            'gc_obs_wpp', 
            array(
                'label'      => 'Texto Observação',
                'section'    => 'gc_wpp_section',
                'settings'   => 'gc_obs_wpp'
            )
        ) 
    );

    //COLORS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bgl_wpp',
            array(
                'label' => 'Background da Esquerda',
                'section' => 'gc_wpp_section',
                'settings' => 'gc_bgl_wpp',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bgr_wpp',
            array(
                'label' => 'Background da Direita',
                'section' => 'gc_wpp_section',
                'settings' => 'gc_bgr_wpp',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_txt_btn_wpp',
            array(
                'label' => 'Cor do Texto do Botão',
                'section' => 'gc_wpp_section',
                'settings' => 'gc_txt_btn_wpp',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_btn_wpp',
            array(
                'label' => 'Cor wpp do Botão',
                'section' => 'gc_wpp_section',
                'settings' => 'gc_btn_wpp',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_btn_hover_wpp',
            array(
                'label' => 'Cor 2 do Botão',
                'section' => 'gc_wpp_section',
                'settings' => 'gc_btn_hover_wpp',
            )
        )
    );

}