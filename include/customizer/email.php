<?php
function gc_email_customizer( $wp_customize ) {
    //Settings
    $wp_customize->add_setting('gc_email_home', array('default' => ''));

    //Sections
    $wp_customize->add_section('gc_email_section', array(
        'title' => 'E-mail Marketing',
        'priority' => 3
    ));

    //Controllers
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
    );

}
