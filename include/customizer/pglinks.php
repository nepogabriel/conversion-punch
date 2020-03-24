<?php
function gc_pglinks_customizer( $wp_customize ) {

    //SETTINGS
    $wp_customize->add_setting('gc_author_url', array('default' => ''));
    $wp_customize->add_setting('gc_link_user', array('default' => 'htpps://instagram.com'));
    $wp_customize->add_setting('gc_user', array('default' => '@userinsta'));
    $wp_customize->add_setting('gc_description', array('default' => 'Descrição da página aqui...'));

    //Links
    $wp_customize->add_setting('gc_link1', array('default' => '#'));
    $wp_customize->add_setting('gc_link2', array('default' => '#'));
    $wp_customize->add_setting('gc_link3', array('default' => '#'));
    $wp_customize->add_setting('gc_link4', array('default' => '#'));
    $wp_customize->add_setting('gc_link5', array('default' => '#'));
    $wp_customize->add_setting('gc_link6', array('default' => '#'));
    $wp_customize->add_setting('gc_link7', array('default' => '#'));
    $wp_customize->add_setting('gc_link8', array('default' => '#'));
    $wp_customize->add_setting('gc_link9', array('default' => '#'));
    $wp_customize->add_setting('gc_link10', array('default' => '#'));
    $wp_customize->add_setting('gc_link11', array('default' => '#'));
    $wp_customize->add_setting('gc_link12', array('default' => '#'));
    $wp_customize->add_setting('gc_link13', array('default' => '#'));
    $wp_customize->add_setting('gc_link14', array('default' => '#'));
    $wp_customize->add_setting('gc_link15', array('default' => '#'));
    $wp_customize->add_setting('gc_link16', array('default' => '#'));
    $wp_customize->add_setting('gc_link17', array('default' => '#'));
    $wp_customize->add_setting('gc_link18', array('default' => '#'));
    $wp_customize->add_setting('gc_link19', array('default' => '#'));
    $wp_customize->add_setting('gc_link20', array('default' => '#'));
    

    //Fields
    $wp_customize->add_setting('gc_field1', array('default' => ''));
    $wp_customize->add_setting('gc_field2', array('default' => ''));
    $wp_customize->add_setting('gc_field3', array('default' => ''));
    $wp_customize->add_setting('gc_field4', array('default' => ''));
    $wp_customize->add_setting('gc_field5', array('default' => ''));
    $wp_customize->add_setting('gc_field6', array('default' => ''));
    $wp_customize->add_setting('gc_field7', array('default' => ''));
    $wp_customize->add_setting('gc_field8', array('default' => ''));
    $wp_customize->add_setting('gc_field9', array('default' => ''));
    $wp_customize->add_setting('gc_field10', array('default' => ''));
    $wp_customize->add_setting('gc_field11', array('default' => ''));
    $wp_customize->add_setting('gc_field12', array('default' => ''));
    $wp_customize->add_setting('gc_field13', array('default' => ''));
    $wp_customize->add_setting('gc_field14', array('default' => ''));
    $wp_customize->add_setting('gc_field15', array('default' => ''));
    $wp_customize->add_setting('gc_field16', array('default' => ''));
    $wp_customize->add_setting('gc_field17', array('default' => ''));
    $wp_customize->add_setting('gc_field18', array('default' => ''));
    $wp_customize->add_setting('gc_field19', array('default' => ''));
    $wp_customize->add_setting('gc_field20', array('default' => ''));
    

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
                'label'      => __( 'Imagem Autor', 'Conversion Punch' ),
                'section'    => 'gc_pglinks_section',
                'settings'   => 'gc_author_url',
            )
        ) 
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link_user',
            array(
                'label' => 'Link User',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link_user',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_user',
            array(
                'label' => 'Seu Nome ou User do Instagram',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_user',
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

    //LINKS and FIELDS
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link1',
            array(
                'label' => 'Link do Campo 1',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link1',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field1',
            array(
                'label' => 'Campo 1',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field1',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link2',
            array(
                'label' => 'Link do Campo 2',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link2',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field2',
            array(
                'label' => 'Campo 2',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field2',
            )
        )
    );
    

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link3',
            array(
                'label' => 'Link do Campo 3',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link3',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field3',
            array(
                'label' => 'Campo 3',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field3',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link4',
            array(
                'label' => 'Link do Campo 4',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link4',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field4',
            array(
                'label' => 'Campo 4',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field4',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link5',
            array(
                'label' => 'Link do Campo 5',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link5',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field5',
            array(
                'label' => 'Campo 5',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field5',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link6',
            array(
                'label' => 'Link do Campo 6',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link6',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field6',
            array(
                'label' => 'Campo 6',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field6',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link7',
            array(
                'label' => 'Link do Campo 7',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link7',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field7',
            array(
                'label' => 'Campo 7',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field7',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link8',
            array(
                'label' => 'Link do Campo 8',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link8',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field8',
            array(
                'label' => 'Campo 8',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field8',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link9',
            array(
                'label' => 'Link do Campo 9',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link9',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field9',
            array(
                'label' => 'Campo 9',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field9',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link10',
            array(
                'label' => 'Link do Campo 10',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link10',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field10',
            array(
                'label' => 'Campo 10',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field10',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link11',
            array(
                'label' => 'Link do Campo 11',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link11',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field11',
            array(
                'label' => 'Campo 11',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field11',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link12',
            array(
                'label' => 'Link do Campo 12',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link12',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field12',
            array(
                'label' => 'Campo 12',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field12',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link13',
            array(
                'label' => 'Link do Campo 13',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link13',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field13',
            array(
                'label' => 'Campo 13',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field13',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link14',
            array(
                'label' => 'Link do Campo 14',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link14',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field14',
            array(
                'label' => 'Campo 14',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field14',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link15',
            array(
                'label' => 'Link do Campo 15',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link15',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field15',
            array(
                'label' => 'Campo 15',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field15',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field16',
            array(
                'label' => 'Campo 16',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field16',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link16',
            array(
                'label' => 'Link do Campo 16',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link16',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link17',
            array(
                'label' => 'Link do Campo 17',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link17',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field17',
            array(
                'label' => 'Campo 17',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field17',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link18',
            array(
                'label' => 'Link do Campo 18',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link18',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field18',
            array(
                'label' => 'Campo 18',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field18',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link19',
            array(
                'label' => 'Link do Campo 19',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link19',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field19',
            array(
                'label' => 'Campo 19',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field19',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_link20',
            array(
                'label' => 'Link do Campo 20',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_link20',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gc_field20',
            array(
                'label' => 'Campo 20',
                'section' => 'gc_pglinks_section',
                'settings' => 'gc_field20',
            )
        )
    );

}