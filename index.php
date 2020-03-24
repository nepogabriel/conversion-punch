<?php
get_header();
get_template_part('template_parts/default-header');
get_template_part('template_parts/banner-home');
?>

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
        <div class="row">
            <div class="col-12 col-lg-9 moreposts">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>

                        <?php get_template_part('template_parts/post'); ?>
                        
                    <?php endwhile; ?>

                    <div class="pag">
                        <?php
                            global $wp_query;

                            echo paginate_links( array(
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages,
                                'show_all' => false,
                                'end_size' => 1, //padrão
                                'mid_size' => 1, //padrão é 2
                                'prev_next' => true, //padrão
                                'prev_text' => '<i class="fa fa-angle-left"></i>',
                                'next_text' => '<i class="fa fa-angle-right"></i>'

                            ));
                        ?>
                    </div>

                <?php endif; ?>
                
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php
get_template_part('template_parts/default-footer');
get_footer();
?>