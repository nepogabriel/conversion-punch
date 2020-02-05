<?php
//Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';
require get_template_directory().'/include/ajax.php';


//Hooks
add_action("wp_enqueue_scripts", "gb_theme_styles");
add_action("after_setup_theme", "gb_after_setup");
add_action("widgets_init", "gb_widgets");
add_action("customize_register", "gb_customize_register");