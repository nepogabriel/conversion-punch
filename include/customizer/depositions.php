<?php
function gc_depositions_customizer( $wp_customize ) {

    //Settings
    $wp_customize->add_setting('gc_depo1_url', array('default' => ''));
    $wp_customize->add_setting('gc_depo1_txt', array('default' => ''));
    $wp_customize->add_setting('gc_depo1_autor', array('default' => ''));

    $wp_customize->add_setting('gc_depo2_url', array('default' => ''));
    $wp_customize->add_setting('gc_depo2_txt', array('default' => ''));
    $wp_customize->add_setting('gc_depo2_autor', array('default' => ''));

    $wp_customize->add_setting('gc_depo3_url', array('default' => ''));
    $wp_customize->add_setting('gc_depo3_txt', array('default' => ''));
    $wp_customize->add_setting('gc_depo3_autor', array('default' => ''));

    $wp_customize->add_setting('gc_depo4_url', array('default' => ''));
    $wp_customize->add_setting('gc_depo4_txt', array('default' => ''));
    $wp_customize->add_setting('gc_depo4_autor', array('default' => ''));

    $wp_customize->add_setting('gc_depo5_url', array('default' => ''));
    $wp_customize->add_setting('gc_depo5_txt', array('default' => ''));
    $wp_customize->add_setting('gc_depo5_autor', array('default' => ''));
    
    //Panel
    $wp_customize->add_panel('gc_depositions', array(
        'title' => 'Depoimentos',
        'priority' => 5
    ));

    //Sections
    $wp_customize->add_section('gc_depo1', array(
        'title' => 'Depoimento 1',
        'priority' => 1,
        'panel' => 'gc_depositions',
    ));

    $wp_customize->add_section('gc_depo2', array(
        'title' => 'Depoimento 2',
        'priority' => 2,
        'panel' => 'gc_depositions',
    ));

    $wp_customize->add_section('gc_depo3', array(
        'title' => 'Depoimento 3',
        'priority' => 3,
        'panel' => 'gc_depositions',
    ));

    $wp_customize->add_section('gc_depo4', array(
        'title' => 'Depoimento 4',
        'priority' => 4,
        'panel' => 'gc_depositions',
    ));

    $wp_customize->add_section('gc_depo5', array(
        'title' => 'Depoimento 5',
        'priority' => 5,
        'panel' => 'gc_depositions',
    ));

    //Controllers
    //-Texto:
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo1_txt',
            array (
                'label' => 'Texto:',
                'section' => 'gc_depo1',
                'settings' => 'gc_depo1_txt'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo2_txt',
            array (
                'label' => 'Texto:',
                'section' => 'gc_depo2',
                'settings' => 'gc_depo2_txt'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo3_txt',
            array (
                'label' => 'Texto:',
                'section' => 'gc_depo3',
                'settings' => 'gc_depo3_txt'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo4_txt',
            array (
                'label' => 'Texto:',
                'section' => 'gc_depo4',
                'settings' => 'gc_depo4_txt'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo5_txt',
            array (
                'label' => 'Texto:',
                'section' => 'gc_depo5',
                'settings' => 'gc_depo5_txt'
            )
        )
    );

    //-Autor:
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo1_autor',
            array (
                'label' => 'Autor:',
                'section' => 'gc_depo1',
                'settings' => 'gc_depo1_autor'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo2_autor',
            array (
                'label' => 'Autor:',
                'section' => 'gc_depo2',
                'settings' => 'gc_depo2_autor'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo3_autor',
            array (
                'label' => 'Autor:',
                'section' => 'gc_depo3',
                'settings' => 'gc_depo3_autor'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo4_autor',
            array (
                'label' => 'Autor:',
                'section' => 'gc_depo4',
                'settings' => 'gc_depo4_autor'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_depo5_autor',
            array (
                'label' => 'Autor:',
                'section' => 'gc_depo5',
                'settings' => 'gc_depo5_autor'
            )
        )
    );

    //-Imagem:
    //Adicionar o Cropped p/ definir o tamanho da imagem
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'gc_depo1_url',
            array(
                'label' => 'Imagem:',
                'section' => 'gc_depo1',
                'settings' => 'gc_depo1_url',
                /*O padrão é 150x150
                'width' => '200',
                'height' => '200',*/
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'gc_depo2_url',
            array(
                'label' => 'Imagem:',
                'section' => 'gc_depo2',
                'settings' => 'gc_depo2_url'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'gc_depo3_url',
            array(
                'label' => 'Imagem:',
                'section' => 'gc_depo3',
                'settings' => 'gc_depo3_url'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'gc_depo4_url',
            array(
                'label' => 'Imagem:',
                'section' => 'gc_depo4',
                'settings' => 'gc_depo4_url'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'gc_depo5_url',
            array(
                'label' => 'Imagem:',
                'section' => 'gc_depo5',
                'settings' => 'gc_depo5_url'
            )
        )
    );

}