        <!-- Arquivo onde está a estrutura que irá aparecer como posts relacionados.  -->
<div class="col-sm-4">
            <!-- Estrutura do post -->
            <div class="post_related_item">

                <!-- Miniatura do post (imagem) -->
                <?php if(has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                    <?php  
                        //the_post_thumbnail('large', array('class' => 'post_thumb'));
                        the_post_thumbnail('gc-thumb-small');
                    ?>
                </a>
                <?php endif; ?>
                
                <!-- Título do post 
                <h2><a href="<?php// the_permalink(); ?>"> <?php// the_title(); ?> </a></h2>-->

                <div class="post_title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>

                <!-- Comentários / leia mais 
                <p>
                <?php// comments_number('0 comentários', '1 comentário', '% comentários'); ?><br>

                <a href="<?php// the_permalink(); ?>">LEIA MAIS</a>
                </p>-->

                <div class="post_readmore">
                    <!--<a href="<?php// the_permalink(); ?>">
                        <div class="post_button">
                            Ler Mais...
                        </div>
                    </a>-->
                </div>

            </div>

</div>