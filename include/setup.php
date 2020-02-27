<?php
//Register Custom Navigation Walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function gc_theme_styles(){
    //CSS
    wp_enqueue_style("bootstrap_css", get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style("google_fonts", "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style("template_css", get_template_directory_uri().'/assets/css/template.css', array('bootstrap_css', 'google_fonts'));
    
    //JS
    wp_enqueue_script("bootstrap_js", get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script("script_js", get_template_directory_uri().'/assets/js/script.js', array('jquery', 'bootstrap_js'), false, true);
}

function gc_after_setup(){
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");

    register_nav_menu("top", "Menu Principal");
}

function gc_widgets() {

    register_sidebar(
        array(
            'name' => 'Busca',
            'id' => 'gc_searchform',
            'before_widget' => '<div class="blog-search">',
            'after_widget' => '</div>',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
        )
    );

    register_sidebar( array(
        'name' => 'Sidebar Lateral',
        'id' => 'gc_sidebar',
        'description' => 'Sidebar Lateral',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar( array(
        'name' => 'Widget 1 Rodapé',
        'id' => 'gc_footer1',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar( array(
        'name' => 'Widget 2 Rodapé',
        'id' => 'gc_footer2',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar( array(
        'name' => 'Widget 3 Rodapé',
        'id' => 'gc_footer3',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar( array(
        'name' => 'Widget 4 Rodapé',
        'id' => 'gc_footer4',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

}