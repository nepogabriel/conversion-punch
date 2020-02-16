<?php
//Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';
require get_template_directory().'/include/ajax.php';


//Hooks
add_action("wp_enqueue_scripts", "gc_theme_styles");
add_action("after_setup_theme", "gc_after_setup");
add_action("widgets_init", "gc_widgets");
add_action("customize_register", "gc_customize_register");

//Repostas nos cometários sem recarregar a página
function theme_queue_js() {
    if( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts', 'theme_queue_js');