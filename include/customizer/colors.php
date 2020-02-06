<?php
function gb_colors_customizer( $wp_customize ) {

//Settings
    //Header
    $wp_customize->add_setting('gb_linetop', array('default' => '#03072b'));

    $wp_customize->add_setting('gb_barcta', array('default' => '#03072b'));
    $wp_customize->add_setting('gb_barcta_hover', array('default' => '#04c471'));
    $wp_customize->add_setting('gb_barcta_text', array('default' => '#04c471'));
    $wp_customize->add_setting('gb_barcta_text_hover', array('default' => '#03072b'));
    $wp_customize->add_setting('gb_barcta_button', array('default' => '#04c471'));
    $wp_customize->add_setting('gb_barcta_button_hover', array('default' => '#03072b'));
    $wp_customize->add_setting('gb_barcta_button_text', array('default' => '#03072b'));
    $wp_customize->add_setting('gb_barcta_button_text_hover', array('default' => '#04c471'));

    //Loop de Posts
    $wp_customize->add_setting('gb_titlepost', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_button', array('default' => '#455482'));
    $wp_customize->add_setting('gb_pagination', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_pagination_hover', array('default' => '#2d3a64'));

    //Footer
    $wp_customize->add_setting('gb_footerup', array('default' => '#03072b'));
    $wp_customize->add_setting('gb_footerdown', array('default' => '#04c471'));
    $wp_customize->add_setting('gb_footerdown_hover', array('default' => '#03072b'));
    $wp_customize->add_setting('gb_footerdown_text', array('default' => '#03072b'));
    $wp_customize->add_setting('gb_footerdown_text_hover', array('default' => '#04c471'));

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
    //HEADER
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
            'gb_barcta',
            array(
                'label' => 'Background Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_barcta_hover',
            array(
                'label' => 'Background Hover Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_barcta_text',
            array(
                'label' => 'Texto Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta_text',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_barcta_text_hover',
            array(
                'label' => 'Hover Texto Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta_text_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_barcta_button',
            array(
                'label' => 'Background Botão Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta_button',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_barcta_button_hover',
            array(
                'label' => 'Hover Background Botão Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta_button_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_barcta_button_text',
            array(
                'label' => 'Texto Botão Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta_button_text',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_barcta_button_text_hover',
            array(
                'label' => 'Hover Texto Botão Barra CPA',
                'section' => 'gb_header',
                'settings' => 'gb_barcta_button_text_hover',
            )
        )
    );

    //LOOP DE POSTS
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


    //FOOTER
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
            'gb_footerdown_hover',
            array(
                'label' => 'Hover Rodapé Inferior',
                'section' => 'gb_footer',
                'settings' => 'gb_footerdown_hover',
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

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_footerdown_text_hover',
            array(
                'label' => 'Hover Texto Rodapé Inferior',
                'section' => 'gb_footer',
                'settings' => 'gb_footerdown_text_hover',
            )
        )
    );

}