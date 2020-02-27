<?php
function gc_pglinks_customizer( $wp_customize ) {

    //SETTINGS
    //Links
    $wp_customize->add_setting('gc_userinsta', array('default' => '@userinsta'));
    $wp_customize->add_setting('gc_description', array('default' => 'Descrição da página aqui...'));
    $wp_customize->add_setting('gc_author_url', array('default' => ''));

    //Sections
    $wp_customize->add_section('gc_pglinks_section', array(
        'title' => 'Page Links',
        'priority' => 4
    ));

    //Controllers
    $wp_customize->add_control( 
        new WP_Customize_Upload_Control( 
            $wp_customize, 
            'gc_author_url', 
            array(
                'label'      => __( 'Img Autor', 'Conversion Punch' ),
                'section'    => 'gc_pglinks_section',
                'settings'   => 'gc_author_url',
            )
        ) 
    ); 

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_userinsta',
            array(
                'label' => 'Nome ou User do Instagram',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_userinsta',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_description',
            array(
                'label' => 'Descrição',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_description',
            )
        )
    );

}