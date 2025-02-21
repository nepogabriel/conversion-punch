<header>
    <div class="top_header"></div>

    <div class="header">

        <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-end" role="navigation">
            <div class="container">
                    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    if(has_custom_logo()) {
                        the_custom_logo();
                    }

                    wp_nav_menu( array(
                        'theme_location'    => 'top',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse flex-grow-0',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ));
                ?>
        </nav>
    </div>
</header>