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

                <a href="<?php echo get_theme_mod('gc_link_user'); ?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod( 'gc_author_url' ); ?>" alt="Imagem de perfil do autor">
                </a>

            <?php else: ?>

                <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/author.jpg' ?>" alt="Imagem de perfil do autor">

            <?php endif; ?>

            <?php if(get_theme_mod('gc_user')): ?>
                <p class="pl-user">
                    <?php echo get_theme_mod('gc_user'); ?>
                </p>
            <?php endif; ?>
            
            <?php if(get_theme_mod('gc_description')): ?>
                <p class="pl-description">
                    <?php echo get_theme_mod('gc_description'); ?>
                </p>
            <?php endif; ?>

        </div>

        <div class="social-media">
            <ul class="list-social">

                <!-- INSTAGRAM -->
                <?php if(get_theme_mod('gc_instagram')): ?>
                    <li class="item">
                        <a class="bg-insta" href="<?php echo get_theme_mod('gc_instagram'); ?>" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- TWITTER -->
                <?php if(get_theme_mod('gc_twitter')): ?>
                    <li class="item">
                        <a class="bg-tt" href="<?php echo get_theme_mod('gc_twitter'); ?>" target="_blank"> 
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- YOUTUBE -->
                <?php if(get_theme_mod('gc_youtube')): ?>
                    <li class="item">
                        <a class="bg-ytb" href="<?php echo get_theme_mod('gc_youtube'); ?>" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- FACEBOOK -->
                <?php if(get_theme_mod('gc_facebook')): ?>
                    <li class="item">
                        <a class="bg-face" href="<?php echo get_theme_mod('gc_facebook'); ?>" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- WHATSAPP -->
                <?php if(get_theme_mod('gc_whatsapp')): ?>
                    <li class="item">
                        <a class="bg-wpp" href="<?php echo get_theme_mod('gc_whatsapp'); ?>" target="_blank">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- TELEGRAM -->
                <?php if(get_theme_mod('gc_telegram')): ?>
                    <li class="item">
                        <a class="bg-tele" href="<?php echo get_theme_mod('gc_telegram'); ?>" target="_blank">
                            <i class="fa fa-telegram"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- SNAPCHAT -->
                <?php if(get_theme_mod('gc_snapchat')): ?>
                    <li class="item">
                        <a class="bg-snap" href="<?php echo get_theme_mod('gc_snapchat'); ?>" target="_blank">
                            <i class="fa fa-snapchat"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- PINTEREST -->
                <?php if(get_theme_mod('gc_pinterest')): ?>
                    <li class="item">
                        <a class="bg-pinte" href="<?php echo get_theme_mod('gc_pinterest'); ?>" target="_blank">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- GOOGLE PLUS -->
                <?php if(get_theme_mod('gc_googleplus')): ?>
                    <li class="item">
                        <a class="bg-google" href="<?php echo get_theme_mod('gc_googleplus'); ?>" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- LINKEDIN -->
                <?php if(get_theme_mod('gc_linkedin')): ?>
                    <li class="item">
                        <a class="bg-lkd" href="<?php echo get_theme_mod('gc_linkedin'); ?>" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- SPOTIFY -->
                <?php if(get_theme_mod('gc_spotify')): ?>
                    <li class="item">
                        <a class="bg-sty" href="<?php echo get_theme_mod('gc_spotify'); ?>" target="_blank">
                            <i class="fa fa-spotify"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- SOUNDCLOUD -->
                <?php if(get_theme_mod('gc_soundcloud')): ?>
                    <li class="item">
                        <a class="bg-sound" href="<?php echo get_theme_mod('gc_soundcloud'); ?>" target="_blank">
                            <i class="fa fa-soundcloud"></i>
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>

        <div class="group-links d-flex justify-content-center">
            <ul class="list-itens">

            <!-- <?php
                    // if(get_theme_mod('gc_title_1')):
                    
                    // echo get_theme_mod('gc_title_1');
                    
                    // else:
                ?> 

                    Título da Página de Captura Aqui

                <?php //endif; ?>  -->

                <?php if(get_theme_mod('gc_field1')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link1'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field1'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if(get_theme_mod('gc_field2')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link2'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field2'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if(get_theme_mod('gc_field3')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link3'); ?>" target="_blank">
                        <?php echo get_theme_mod('gc_field3'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if(get_theme_mod('gc_field4')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link4'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field4'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if(get_theme_mod('gc_field5')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link5'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field5'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if(get_theme_mod('gc_field6')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link6'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field6'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if(get_theme_mod('gc_field7')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link7'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field7'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if(get_theme_mod('gc_field8')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link8'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field8'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field9')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link9'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field9'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field10')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link10'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field10'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field11')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link11'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field11'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field12')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link12'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field12'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field13')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link13'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field13'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field14')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link14'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field14'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field15')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link15'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field15'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field16')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link16'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field16'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field17')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link17'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field17'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field18')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link18'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field18'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field19')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link19'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field19'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('gc_field20')): ?>
                    <li class="link-item">
                        <a href="<?php echo get_theme_mod('gc_link20'); ?>" target="_blank">
                            <?php echo get_theme_mod('gc_field20'); ?>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</section>

<?php get_footer(); ?>
