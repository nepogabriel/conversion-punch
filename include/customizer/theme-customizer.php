<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/depositions.php';
require get_template_directory().'/include/customizer/email.php'; //ñ ta funcionando
require get_template_directory().'/include/customizer/colors.php';

function gb_customize_register( $wp_customize ) {

    gb_social_customizer( $wp_customize );
    gb_depositions_customizer( $wp_customize );
    gb_email_customizer( $wp_customize );
    gb_colors_customizer( $wp_customize );

}