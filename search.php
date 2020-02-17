<?php
get_header();

//Banner Single
get_template_part('template_parts/banner-single');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 moreposts">
                
                <?php //Se houver resultados exibe o conteúdo, senão exibe um formulário de buscas
                    if (is_search()) :
                        $total_results = $wp_query->found_posts;

                        echo "<h2 class='mb-3'>" . sprintf(__('%s resultado(s) para "%s"', 'Conversion Punch'), $total_results, get_search_query()) . "</h2>";

                    endif;
                ?>

                <!-- Verificar se tem post e mostrar na página inicial -->
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php get_template_part('template_parts/post'); ?>

                <?php endwhile; ?>

                <!-- Se não encontrar nada na busca -->
                <?php else :

                    echo "<p> Sua busca não econtrou resultados. Use o campo de pesquisa abaixo para refazer a busca. </p>";
                    get_search_form();
                    
                    echo "<img src=".get_template_directory_uri().'/assets/img/404.png'.">";

                endif; ?>

                <!-- Navegação Posts -->
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

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>