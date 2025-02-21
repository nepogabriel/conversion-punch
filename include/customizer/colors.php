<?php
function gc_colors_customizer( $wp_customize ) {

//Settings
    //Header
    $wp_customize->add_setting('gc_linetop', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_menu', array('default' => '#111111'));
    $wp_customize->add_setting('gc_menu_hover', array('default' => '#bc0d3c'));

    $wp_customize->add_setting('gc_barcta', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_barcta_hover', array('default' => '#111111'));
    $wp_customize->add_setting('gc_barcta_text', array('default' => '#ffffff'));
    $wp_customize->add_setting('gc_barcta_text_hover', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_barcta_button', array('default' => '#111111'));
    $wp_customize->add_setting('gc_barcta_button_hover', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_barcta_button_text', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_barcta_button_text_hover', array('default' => '#000000'));

    //Captura E-mail Top
    // $wp_customize->add_setting('gc_cap_bg_top', array('default' => '#111111'));

    //Loop de Posts FALTA AQUI
    $wp_customize->add_setting('gc_cat_author_hr', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_titlepost', array('default' => '#111111'));
    $wp_customize->add_setting('gc_pagination', array('default' => '#111111'));
    $wp_customize->add_setting('gc_bg_pagination', array('default' => '#bc0d3c'));

    //Search Form
    $wp_customize->add_setting('gc_form_control', array('default' => '#111111'));
    $wp_customize->add_setting('gc_icon_search', array('default' => '#bc0d3c'));

    //Sidebar
    $wp_customize->add_setting('gc_bg_sidebar', array('default' => '#111111'));
    $wp_customize->add_setting('gc_sidebar_text', array('default' => '#bc0d3c'));

    //Footer
    $wp_customize->add_setting('gc_footerup', array('default' => '#111111'));
    $wp_customize->add_setting('gc_footerup_title', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_footerup_text', array('default' => '#fff'));

    $wp_customize->add_setting('gc_line_footer', array('default' => '#bc0d3c'));

    $wp_customize->add_setting('gc_footerdown', array('default' => '#111111'));
    $wp_customize->add_setting('gc_footerdown_hover', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_footerdown_text', array('default' => '#bc0d3c'));
    $wp_customize->add_setting('gc_footerdown_text_hover', array('default' => '#111111'));

    //Page Links
    $wp_customize->add_setting('gc_gradient1', array('default' => '#002749'));
    $wp_customize->add_setting('gc_gradient2', array('default' => '#00bc96'));
    //$wp_customize->add_setting('gc_direction', array('default' => 'right'));

//Panel
    $wp_customize->add_panel('gc_colors_panel', array(
        'title' => 'Cores',
        'priority' => 2
    ));

//Sections
    //Header
    $wp_customize->add_section('gc_header', array(
        'title' => 'Cabeçalho',
        'priority' => 1,
        'panel' => 'gc_colors_panel'
    ));

    $wp_customize->add_section('gc_barcta_color', array(
        'title' => 'Barra CPA',
        'priority' => 3,
        'panel' => 'gc_colors_panel'
    ));

    //Captura E-mail Top
    // $wp_customize->add_section('gc_capture_email', array(
    //     'title' => 'Captura de E-mail Topo',
    //     'priority' => 20,
    //     'panel' => 'gc_colors_panel'
    // ));

    //Loop de Posts
    $wp_customize->add_section('gc_loopposts', array(
        'title' => 'Loop de Posts',
        'priority' => 4,
        'panel' => 'gc_colors_panel'
    ));

    //Search Form
    $wp_customize->add_section('gc_search_form', array(
        'title' => 'Formulário de Pesquisa',
        'priority' => 5,
        'panel' => 'gc_colors_panel'
    ));

    //Sidebar
    $wp_customize->add_section('gc_sidebar', array(
        'title' => 'Sidebar',
        'priority' => 6,
        'panel' => 'gc_colors_panel'
    ));

    //Footer
    $wp_customize->add_section('gc_footer', array(
        'title' => 'Rodapé',
        'priority' => 7,
        'panel' => 'gc_colors_panel'
    ));

    //Page Links
    $wp_customize->add_section('gc_page_links', array(
        'title' => 'Page Links',
        'priority' => 8,
        'panel' => 'gc_colors_panel'
    ));

//Controllers
    //HEADER
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_linetop',
            array(
                'label' => 'Linha Topo',
                'section' => 'gc_header',
                'settings' => 'gc_linetop',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_menu',
            array(
                'label' => 'Menu',
                'section' => 'gc_header',
                'settings' => 'gc_menu',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_menu_hover',
            array(
                'label' => 'Hover Menu',
                'section' => 'gc_header',
                'settings' => 'gc_menu_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta',
            array(
                'label' => 'Background Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta_hover',
            array(
                'label' => 'Background Hover Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta_text',
            array(
                'label' => 'Texto Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta_text',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta_text_hover',
            array(
                'label' => 'Hover Texto Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta_text_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta_button',
            array(
                'label' => 'Background Botão Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta_button',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta_button_hover',
            array(
                'label' => 'Hover Background Botão Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta_button_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta_button_text',
            array(
                'label' => 'Texto Botão Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta_button_text',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_barcta_button_text_hover',
            array(
                'label' => 'Hover Texto Botão Barra CPA',
                'section' => 'gc_barcta_color',
                'settings' => 'gc_barcta_button_text_hover',
            )
        )
    );

    //LOOP DE POSTS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_cat_author_hr',
            array(
                'label' => 'Categoria/Autor/Texto Botão',
                'section' => 'gc_loopposts',
                'settings' => 'gc_cat_author_hr',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_titlepost',
            array(
                'label' => 'Título Post/Bg Botão/Borda Categoria/Linha',
                'section' => 'gc_loopposts',
                'settings' => 'gc_titlepost',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_titlepost_hover',
            array(
                'label' => 'Hover Título do Post',
                'section' => 'gc_loopposts',
                'settings' => 'gc_titlepost_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_button',
            array(
                'label' => 'Background Botão',
                'section' => 'gc_loopposts',
                'settings' => 'gc_button',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_button_text',
            array(
                'label' => 'Botão',
                'section' => 'gc_loopposts',
                'settings' => 'gc_button_text',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_pagination',
            array(
                'label' => 'Paginação',
                'section' => 'gc_loopposts',
                'settings' => 'gc_pagination',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bg_pagination',
            array(
                'label' => 'Paginação Ativa',
                'section' => 'gc_loopposts',
                'settings' => 'gc_bg_pagination',
            )
        )
    );

    //Search Form
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_form_control',
            array(
                'label' => 'Borda / Botão',
                'section' => 'gc_search_form',
                'settings' => 'gc_form_control',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_icon_search',
            array(
                'label' => 'Icone do Botão',
                'section' => 'gc_search_form',
                'settings' => 'gc_icon_search',
            )
        )
    );

    //SIDEBAR
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_bg_sidebar',
            array(
                'label' => 'Background Sidebar',
                'section' => 'gc_sidebar',
                'settings' => 'gc_bg_sidebar',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_sidebar_text',
            array(
                'label' => 'Título Sidebar',
                'section' => 'gc_sidebar',
                'settings' => 'gc_sidebar_text',
            )
        )
    );

    //FOOTER
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_footerup',
            array(
                'label' => 'Background Rodapé Superior',
                'section' => 'gc_footer',
                'settings' => 'gc_footerup',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_footerup_title',
            array(
                'label' => 'Titulo Rodapé Superior',
                'section' => 'gc_footer',
                'settings' => 'gc_footerup_title',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_footerup_text',
            array(
                'label' => 'Texto/Link Rodapé Superior',
                'section' => 'gc_footer',
                'settings' => 'gc_footerup_text',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_line_footer',
            array(
                'label' => 'Linha Rodapé',
                'section' => 'gc_footer',
                'settings' => 'gc_line_footer',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_footerdown',
            array(
                'label' => 'Background Rodapé Inferior',
                'section' => 'gc_footer',
                'settings' => 'gc_footerdown',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_footerdown_hover',
            array(
                'label' => 'Hover Background Rodapé Inferior',
                'section' => 'gc_footer',
                'settings' => 'gc_footerdown_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_footerdown_text',
            array(
                'label' => 'Texto Rodapé Inferior',
                'section' => 'gc_footer',
                'settings' => 'gc_footerdown_text',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_footerdown_text_hover',
            array(
                'label' => 'Hover Texto Rodapé Inferior',
                'section' => 'gc_footer',
                'settings' => 'gc_footerdown_text_hover',
            )
        )
    );

    //PAGE LINKS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_gradient1',
            array(
                'label' => 'Background 1',
                'section' => 'gc_page_links',
                'settings' => 'gc_gradient1',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_gradient2',
            array(
                'label' => 'Background 2',
                'section' => 'gc_page_links',
                'settings' => 'gc_gradient2',
            )
        )
    );
        
    /* Ñ TA FUNCIONANDO 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gc_direction',
            array(
                'label' => 'Direção Gradiente',
                'section' => 'gc_page_links',
                'settings' => 'gc_direction',
                'type' => 'select',
                'choices' => array(
                    'top' => 'Topo'
                )
            )
        )
    );*/

}