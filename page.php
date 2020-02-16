<?php
get_header();

//Banner Single
get_template_part('template_parts/banner-single');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 moreposts">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                    
                                <h1 class="title-p-s"> <?php the_title(); ?> </h1>

                                <hr>

                                <div class="post_content">
                                    <?php the_content(); ?>
                                </div>

                        <?php endwhile; ?>
                    <?php else : get_404_template(); endif; ?>

                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>