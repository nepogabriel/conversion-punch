<?php
get_header();

//Banner Home
get_template_part('template_parts/banner-home');
?>

<!-- Depoimentos -->
<div class="depositions">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php
                    $d = rand(1,5);
                    $txt = get_theme_mod('gc_depo'.$d.'_txt');
                    $url = get_theme_mod('gc_depo'.$d.'_url'); //variavel comum
                    $autor = get_theme_mod('gc_depo'.$d.'_autor');
                    $url = wp_get_attachment_image_src($url); //é um array que pega o id da imagem
                ?>

                <img src="<?php echo $url[0]; ?>">
                <i><?php echo $txt; ?></i><br>
                <h6><strong><?php echo $autor ?></strong></h6>
            </div>
            <div class="col-sm-6">
                <?php
                    $d2 = rand(1,5);
                    while($d2 == $d) {
                        $d2 = rand(1,5);
                    }

                    $txt = get_theme_mod('gc_depo'.$d2.'_txt');
                    $url = get_theme_mod('gc_depo'.$d2.'_url');
                    $autor = get_theme_mod('gc_depo'.$d2.'_autor');
                    $url = wp_get_attachment_image_src($url);
                ?>

                <img src="<?php echo $url[0]; ?>">
                <i><?php echo $txt; ?></i><br>
                <h6><strong><?php echo $autor ?></strong></h6>
            </div>
        </div>
    </div>
</div>

<div class="barcta">
    <div class="container">
            <div class="cta">
            <div class="row justify-content-center">
                <p> Frase com chamada para ação aqui! </p>
                <button> Saiba Mais </button>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- LOOP DE POSTS -->
<section>
    <div class="container">
        <div class="moreposts">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>

                    <?php get_template_part('template_parts/post'); ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="loadmoreButton">
            <i class="fa fa-angle-down fa-lg"></i>
            <!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png">-->
            Carregar Mais...
        </div>
    </div>
</section>

<?php get_footer(); ?>