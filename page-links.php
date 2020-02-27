<?php
/* Template name: Page Links */
get_header();
?>

<style type="text/css">
body {
    background: linear-gradient(to right,<?php echo get_theme_mod('gc_gradient1'); ?>,<?php echo get_theme_mod('gc_gradient2'); ?>);
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>

<section id="page-links">
    <div class="container content-links">

        <div class="area-author">
            <?php if(get_theme_mod('gc_author_url')): ?>
                <img class="img-fluid" src="<?php echo get_theme_mod( 'gc_author_url' ); ?>" alt="Imagem de perfil do autor">
            <?php else: ?>
                <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/author.jpg' ?>" alt="Imagem de perfil do autor">
            <?php endif; ?>

            <?php if(get_theme_mod('gc_userinsta')): ?>
                <p class="userinsta"><?php echo get_theme_mod('gc_userinsta'); ?></p>
            <?php endif; ?>
            
            <?php if(get_theme_mod('gc_description')): ?>
                <p class="pl-description"><?php echo get_theme_mod('gc_description'); ?></p>
            <?php endif; ?>
        </div>

        <div class="social-media">
            <ul class="list-social">

                <!-- INSTAGRAM -->
                <?php if(get_theme_mod('gc_instagram')): ?>
                    <li class="item">
                        <a class="bg-insta" href="<?php echo get_theme_mod('gc_instagram'); ?>" target="_blank"> <i class="fa fa-instagram"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- TWITTER -->
                <?php if(get_theme_mod('gc_twitter')): ?>
                    <li class="item">
                        <a class="bg-tt" href="<?php echo get_theme_mod('gc_twitter'); ?>" target="_blank"> <i class="fa fa-twitter"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- YOUTUBE -->
                <?php if(get_theme_mod('gc_youtube')): ?>
                    <li class="item">
                        <a class="bg-ytb" href="<?php echo get_theme_mod('gc_youtube'); ?>" target="_blank"> <i class="fa fa-youtube"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- FACEBOOK -->
                <?php if(get_theme_mod('gc_facebook')): ?>
                    <li class="item">
                        <a class="bg-face" href="<?php echo get_theme_mod('gc_facebook'); ?>" target="_blank"> <i class="fa fa-facebook"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- WHATSAPP -->
                <?php if(get_theme_mod('gc_whatsapp')): ?>
                    <li class="item">
                        <a class="bg-wpp" href="<?php echo get_theme_mod('gc_whatsapp'); ?>" target="_blank"> <i class="fa fa-whatsapp"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- TELEGRAM -->
                <?php if(get_theme_mod('gc_telegram')): ?>
                    <li class="item">
                        <a class="bg-tele" href="<?php echo get_theme_mod('gc_telegram'); ?>" target="_blank"> <i class="fa fa-telegram"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- SNAPCHAT -->
                <?php if(get_theme_mod('gc_snapchat')): ?>
                    <li class="item">
                        <a class="bg-snap" href="<?php echo get_theme_mod('gc_snapchat'); ?>" target="_blank"> <i class="fa fa-snapchat"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- PINTEREST -->
                <?php if(get_theme_mod('gc_pinterest')): ?>
                    <li class="item">
                        <a class="bg-pinte" href="<?php echo get_theme_mod('gc_pinterest'); ?>" target="_blank"> <i class="fa fa-pinterest"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- GOOGLE PLUS -->
                <?php if(get_theme_mod('gc_googleplus')): ?>
                    <li class="item">
                        <a class="bg-google" href="<?php echo get_theme_mod('gc_googleplus'); ?>" target="_blank"> <i class="fa fa-google-plus"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- LINKEDIN -->
                <?php if(get_theme_mod('gc_linkedin')): ?>
                    <li class="item">
                        <a class="bg-lkd" href="<?php echo get_theme_mod('gc_linkedin'); ?>" target="_blank"> <i class="fa fa-linkedin"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- SPOTIFY -->
                <?php if(get_theme_mod('gc_spotify')): ?>
                    <li class="item">
                        <a class="bg-sty" href="<?php echo get_theme_mod('gc_spotify'); ?>" target="_blank"> <i class="fa fa-spotify"></i> </a>
                    </li>
                <?php endif; ?>

                <!-- SOUNDCLOUD -->
                <?php if(get_theme_mod('gc_soundcloud')): ?>
                    <li class="item">
                        <a class="bg-sound" href="<?php echo get_theme_mod('gc_soundcloud'); ?>" target="_blank"> <i class="fa fa-soundcloud"></i> </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>

        <div class="group-links">
            <ul class="list-itens">
                <li class="link-item">
                    <a href="#">Coloque esta página com vários links na sua bio do instagram!</a>
                </li>

                <li class="link-item">
                    <a href="#">Faça uma chamada para ação!</a>
                </li>

                <li class="link-item">
                    <a href="#">Adicione um link aqui!</a>
                </li>

                <li class="link-item">
                    <a href="#">Adicione Links de promoção!</a>
                </li>
            </ul>
        </div>

    </div>
</section>

<?php get_footer(); ?>
