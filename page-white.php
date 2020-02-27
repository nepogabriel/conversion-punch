<?php
/* Template name: Page White */
get_header();
?>

<section>
    <div class="container">
        <div class="row">
            <div class="moreposts">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                    
                                <h1 class="title-p-s my-5 text-center"><strong> <?php the_title(); ?> </strong></h1>

                                <hr>

                                <div class="content_white">
                                    <?php the_content(); ?>
                                </div>

                        <?php endwhile; ?>
                    <?php else : get_404_template(); endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>