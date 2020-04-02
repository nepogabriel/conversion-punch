<?php
/* Template name: Page Captura Telegram */
get_header();
?>

<style type="text/css">
body {
    background:
        linear-gradient(
            to right,
            
            <?php
            if(get_theme_mod('gc_bgl_1')):
                echo get_theme_mod('gc_bgl_1');
            else:
            ?>
            
            #40007c
            
            <?php endif; ?>,

            <?php
            if(get_theme_mod('gc_bgr_1')):
                echo get_theme_mod('gc_bgr_1');
            else: ?>
            
            #32afed
            
            <?php endif; ?>
        );

    background-repeat: no-repeat;
    background-attachment: fixed;
}

.title_cel {
    margin-top: 20px;
}

.text_cel {
    font-size: 18px;
    margin-top: 20px;
    margin-bottom: 35px;
}

.area_cel {
    background-color: #fff;
    display: inline-block;
    padding: 10px;
    border-radius: 10px;
    max-width: 400px;
}

.area_cel .text_cta {
    margin-top: 10px;
    margin-bottom: 15px;
    font-size: 15px;
}

.area_cel .text_obs {
    margin-top: 5px;
    margin-bottom: 15px;
    font-size: 12px;
    color: #303030;
    font-weight: 600;
}

.btn_cel {
    background-color:
        <?php
        if(get_theme_mod('gc_btn_1')):
            echo get_theme_mod('gc_btn_1');
        else:
        ?>
        
        #32afed
        
        <?php endif; ?>;

    color:
        <?php
        if(get_theme_mod('gc_btn_txt_1')):
            echo get_theme_mod('gc_btn_txt_1');
        else:
        ?>
        
        #fff
        
        <?php endif; ?>;

    font-weight: 600;
    display: inline-block;
    padding: 15px;
    border-radius: 5px;
    max-width: 325px;
    text-transform: uppercase;
}

.btn_cel:hover {
    color:
        <?php
        if(get_theme_mod('gc_btn_hover_1')):
            echo get_theme_mod('gc_btn_hover_1');
        else:
        ?>
        
        #002749
        
        <?php endif; ?>;

    box-shadow: 0 0 0 3px
        <?php
        if(get_theme_mod('gc_btn_hover_1')):
            echo get_theme_mod('gc_btn_hover_1');
        else:
        ?>
        
        #002749
        
        <?php endif; ?>;
}
</style>

<div class="container">

    <section id="cap_cel" class="text-center">
        <?php if(has_custom_logo()) { the_custom_logo(); } ?>

        <h1 class="title_cel">
            <strong> 
                <?php
                    if(get_theme_mod('gc_title_1')):
                    
                    echo get_theme_mod('gc_title_1');
                    
                    else:
                ?> 

                    Título da Página de Captura Aqui

                <?php endif; ?> 
            </strong>
        </h1>
        
        <p class="text_cel">
            <?php
                if(get_theme_mod('gc_description_1')):
                    
                echo get_theme_mod('gc_description_1');
            ?> 

            <?php else: ?> 

                Texto para fazer uma chamada para ação aqui!

            <?php endif; ?>
        </p>
    </section>

    <section id="body_cel" class="text-center">
        <div class="area_cel">

            <p class="text_cta">
                <?php
                    if(get_theme_mod('gc_description_1')):
                    
                    echo get_theme_mod('gc_description_1');
                ?> 

                <?php else: ?> 

                    ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI!

                <?php endif; ?>
            </p>

            <div class="btn_cel">
                <?php
                    if(get_theme_mod('gc_txt_btn_1')):
                    
                    echo get_theme_mod('gc_txt_btn_1').'&nbsp; <i class="fa fa-telegram fa-lg"></i>';
                ?> 

                <?php else: ?> 

                    ENTRAR NO GRUPO DO TELEGRAM &nbsp; <i class="fa fa-telegram fa-lg"></i>

                <?php endif; ?>
            </div>

            <p class="text_obs">
                <?php
                    if(get_theme_mod('gc_obs_1')):
                    
                    echo get_theme_mod('gc_obs_1');
                ?> 

                <?php else: ?> 

                    *Link 100% seguro!

                <?php endif; ?>
            </p>

        </div>
    </section>

</div>

<?php get_footer(); ?>