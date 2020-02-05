<?php
function gb_email_customizer( $wp_customize ) {
    //Settings
    $wp_customize->add_setting('gb_email_home', array('default' => ''));

    //Sections
    $wp_customize->add_section('gb_email_section', array(
        'title' => 'E-mail Marketing',
        'priority' => 3
    ));

    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gb_email_home',
            array(
                'label' => 'E-mail Marketing',
                'section' => 'gb_email_section',
                'settings' => 'gb_email_home',
                'type' => 'textarea'
            )
        )
    );

}
