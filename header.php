<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- FONT AWESOME -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="top_header"></div>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <?php
                            if(has_custom_logo()) {
                                the_custom_logo();
                            }
                        ?>
                    </div>

                    <div class="col-sm-10">
                        <div class="menuarea">
                            <nav>
                                <?php
                                    if(has_nav_menu('top')) {
                                        wp_nav_menu(array(
                                            'theme_location' => 'top',
                                            'container' => false,
                                            'fallback_cb' => false
                                        ));
                                    }
                                ?>
                            </nav>

                            <div class="social">
                                <?php if(get_theme_mod('gc_facebook')): ?>
                                    <a target="_blank" href="<?php echo get_theme_mod('gc_facebook'); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/fb_logo.png'; ?>">
                                    </a>
                                <?php endif; ?>
                                
                                <?php if(get_theme_mod('gc_youtube')): ?>
                                    <a target="_blank" href="<?php echo get_theme_mod('gc_youtube'); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/yt_logo.png'; ?>">
                                    </a>
                                <?php endif; ?>
                                
                                <?php if(get_theme_mod('gc_instagram')): ?>
                                    <a target="_blank" href="<?php echo get_theme_mod('gc_instagram'); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/in_logo.png'; ?>">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>