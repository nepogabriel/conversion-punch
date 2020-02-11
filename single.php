  
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
                            <?php
                                the_post();
                                $link_post = esc_url(get_permalink());?>

                                <h6><?php the_category(', '); ?></h6>
                                <h1> <?php the_title(); ?> </h1>

                                <div class="post_info">
                                    <div class="row">
                                        <p><i class="fa fa-user"></i> &nbsp; <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> </p> &nbsp;|&nbsp;
                                        <p><i class="fa fa-calendar"></i> &nbsp; <?php echo get_the_date('d/m/y'); ?></p> &nbsp;|&nbsp;
                                        <p><i class="fa fa-comments"></i> &nbsp; <a href="<?php echo $link_post ?>#comments"> <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?> </a></p>
                                    </div>
                                </div>

                                <hr>

                                <?php the_post_thumbnail('large', array('class' => 'post_thumb')); ?>

                                <div class="post_content">
                                    <?php the_content(); ?>
                                </div>

                                <hr>

                                <h4>Confira outros <Strong>Posts Relacionados:</strong></h4>

                                <hr>
                                
                                <?php
                                    if(comments_open()) {
                                        comments_template();
                                    }
                                ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>