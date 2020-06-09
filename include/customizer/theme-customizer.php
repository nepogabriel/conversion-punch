<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/depositions.php';
require get_template_directory().'/include/customizer/email.php';
require get_template_directory().'/include/customizer/colors.php';
require get_template_directory().'/include/customizer/pglinks.php';
require get_template_directory().'/include/customizer/cap-wpp.php';
require get_template_directory().'/include/customizer/cap-tele.php';

function gc_customize_register( $wp_customize ) {

    gc_social_customizer( $wp_customize );
    gc_depositions_customizer( $wp_customize );
    gc_email_customizer( $wp_customize );
    gc_colors_customizer( $wp_customize );
    gc_pglinks_customizer( $wp_customize );
    gc_capwpp_customizer( $wp_customize );
    gc_captele_customizer( $wp_customize );

}