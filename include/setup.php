<?php
function gb_theme_styles(){
    //CSS
    wp_enqueue_style("bootstrap_css", get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style("google_fonts", "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style("template_css", get_template_directory_uri().'/assets/css/template.css', array('bootstrap_css', 'google_fonts'));
    
    //JS
    wp_enqueue_script("bootstrap_js", get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script("script_js", get_template_directory_uri().'/assets/js/script.js', array('jquery', 'bootstrap_js'), false, true);
}

function gb_after_setup(){
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");

    //Custom Headers
        //header padrão
        add_theme_support("custom-header", array(
            'default-image' => get_template_directory_uri().'/assets/img/bg.jpg',
            'width' => 1280,
            'height' => 400,
            'flex-width' => true,
            'flex-height' => true
            /*'header-text' => false, //hablitar texto ou não
            'uploads' => false //ñ permitir upload*/
        ));

        //Registrando os headers padrões
        register_default_headers( array(
            'header1' => array(
                'url' => get_template_directory_uri().'/assets/img/bg.jpg',
                'thumbnail_url' => get_template_directory_uri().'/assets/img/bg.jpg',
                'description' => 'Header 1'
            )
        ));

    register_nav_menu("top", "Menu Principal");
}

function gb_widgets() {

}