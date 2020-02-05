<?php
function gb_colors_customizer( $wp_customize ) {

    //Settings
        //Header
    $wp_customize->add_setting('gb_linetop', array('default' => '#2d3a64'));
        //Loop de Posts
    $wp_customize->add_setting('gb_titlepost', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_button', array('default' => '#455482'));
    $wp_customize->add_setting('gb_pagination', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_pagination_hover', array('default' => '#2d3a64'));
        //Footer
    $wp_customize->add_setting('gb_footerup', array('default' => '#455482'));
    $wp_customize->add_setting('gb_footerdown', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_footerdown_text', array('default' => '#fff'));

    //Panel
    $wp_customize->add_panel('gb_colors_panel', array(
        'title' => 'Cores',
        'priority' => 2
    ));

    //Sections
        //Header
    $wp_customize->add_section('gb_header', array(
        'title' => 'Cabeçalho',
        'priority' => 1,
        'panel' => 'gb_colors_panel'
    ));
        //Loop de Posts
    $wp_customize->add_section('gb_loopposts', array(
        'title' => 'Loop de Posts',
        'priority' => 4,
        'panel' => 'gb_colors_panel'
    ));
        //Footer
    $wp_customize->add_section('gb_footer', array(
        'title' => 'Rodapé',
        'priority' => 5,
        'panel' => 'gb_colors_panel'
    ));

    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_linetop',
            array(
                'label' => 'Linha Topo',
                'section' => 'gb_header',
                'settings' => 'gb_linetop',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_titlepost',
            array(
                'label' => 'Título do Post',
                'section' => 'gb_loopposts',
                'settings' => 'gb_titlepost',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_button',
            array(
                'label' => 'Botão "Ler Mais"',
                'section' => 'gb_loopposts',
                'settings' => 'gb_button',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_pagination',
            array(
                'label' => 'Paginação',
                'section' => 'gb_loopposts',
                'settings' => 'gb_pagination',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_pagination_hover',
            array(
                'label' => 'Borda Paginação',
                'section' => 'gb_loopposts',
                'settings' => 'gb_pagination_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_footerup',
            array(
                'label' => 'Rodapé Superior',
                'section' => 'gb_footer',
                'settings' => 'gb_footerup',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_footerdown',
            array(
                'label' => 'Rodapé Inferior',
                'section' => 'gb_footer',
                'settings' => 'gb_footerdown',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_footerdown_text',
            array(
                'label' => 'Texto Rodapé Inferior',
                'section' => 'gb_footer',
                'settings' => 'gb_footerdown_text',
            )
        )
    );

}