<?php
get_header();
get_template_part('template_parts/default-header');
get_template_part('template_parts/banner-single');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 moreposts">

                <h1 class="text-center"> <?php the_archive_title(); ?> </h1>

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
                                'mid_size' => 2, //padrão
                                'prev_next' => true, //padrão
                                'prev_text' => '<i class="fa fa-angle-left"></i>',
                                'next_text' => '<i class="fa fa-angle-right"></i>'

                            ));
                        ?>
                    </div>

                <?php else : get_404_template(); endif; ?>
                
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>