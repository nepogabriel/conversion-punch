<article <?php post_class(); ?>>
    <div class="row">

        <div class=" col-12 col-md-5">
            <?php if(has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                    <?php 
                        //the_post_thumbnail('medium', array('class' => 'post_thumb'));
                        the_post_thumbnail('gc-thumb-medium');
                     ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="col-12 col-md-7">
            <div class="post_category">
                <h6><i class="fa fa-folder"></i> &nbsp; <?php the_category(', '); ?></h6>
            </div>
        
            <div class="post_title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </div>

            <div class="post_info">
                <div class="row">
                    <p><i class="fa fa-user"></i> &nbsp; <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> </p> &nbsp;|&nbsp;
                    <p><i class="fa fa-calendar"></i> &nbsp; <?php echo get_the_date('d/m/y'); ?></p> &nbsp;|&nbsp;
                    <p><i class="fa fa-comments"></i> &nbsp; <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?></p>
                </div>
            </div>

            <hr>

            <div class="post_excerpt">
                <?php the_excerpt(); ?>
            </div>

            <div class="post_readmore">
                <a href="<?php the_permalink(); ?>">
                    <div class="post_button">
                        Ler Mais...
                    </div>
                </a>
            </div>
        </div>

    </div>
</artile>