<?php
get_header();
get_template_part('template_parts/default-header');
get_template_part('template_parts/banner-single');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 moreposts">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php
                        if(have_posts()): while(have_posts()): the_post();

                        $link_post = esc_url(get_permalink());
                    ?>

                    <h6><?php the_category(', '); ?></h6>
                    <h1 class="title-p-s"> <?php the_title(); ?> </h1>

                    <div class="post_info">
                        <div class="row">
                            <p><i class="fa fa-user"></i> &nbsp; <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> </p> &nbsp;|&nbsp;
                            <p><i class="fa fa-calendar"></i> &nbsp; <?php echo get_the_date('d/m/y'); ?></p> &nbsp;|&nbsp;
                            <p><i class="fa fa-comments"></i> &nbsp; <a href="<?php echo $link_post ?>#comments"> <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?> </a></p>
                        </div>
                    </div>

                    <hr>

                    <div class="text-center">
                        <?php
                            the_post_thumbnail('large', array('class' => 'img-fluid post_thumb'));
                                    
                            get_template_part('template_parts/share_social1');
                        ?>
                    </div>

                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>

                    <?php //get_template_part('template_parts/share_social2'); ?>

                    <hr>

                    <h4 class="post_related">Confira outros <Strong>Posts Relacionados:</strong></h4>
                    <div class="row">
                        <?php
                            $categories = get_the_category(); //buscando categorias do post (é um array)

                            $gp_query = new WP_Query(array(
                                'posts_per_page' => 3, //quantidade de posts
                                'post__not_in' => array( $post->ID ), //p/ não mostrar o post que está aberto
                                'cat' => $categories[0]->term_id //pegando primeira categoria do post
                            ));
                                        
                            //Verificando se tem posts relacionados
                            if($gp_query->have_posts()) {
                                while($gp_query->have_posts()) {
                                    $gp_query->the_post();
                                    get_template_part('template_parts/related_post'); //Chamando arquivo related_post
                                }

                                //reseta e volta com requisições principais (por exemplo, p/ mostrar comentários e paginação)
                                wp_reset_postdata();
                            }
                        ?>
                    </div>

                    <div style="clear:both"></div>

                    <hr>
                                
                    <?php
                        if(comments_open()) {
                            comments_template();
                        }
                                
                        endwhile; 
                        else : get_404_template(); endif;
                    ?>

                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php
get_template_part('template_parts/default-footer');
get_footer();
?>