<?php
/* Template name: Captura Telegram */
get_header();
?>

<style type="text/css">
body {
    background: linear-gradient(to right,<?php echo get_theme_mod('gc_gradient2'); ?>,#32afed);
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.area_cel {
    background-color: #fff;
    display: inline-block;
    padding: 10px;
    border-radius: 10px;
}

.btn_cel {
    background-color: #32afed;
    color: #fff;
    font-weight: 600;
    display: inline-block;
    padding: 15px;
    border-radius: 5px;
}

.btn_cel:hover {
    color: #002749;
    box-shadow: 0 0 0 3px #002749;
}
</style>

<div class="container">

    <section id="cap_cel" class="text-center">
        <?php if(has_custom_logo()) { the_custom_logo(); } ?>

        <h1 class="title_cel"> Título da Página de Captura Aqui! </h1>
        
        <p class="text_cel">Texto para fazer uma chamada para ação aqui</p>
    </section>

    <section id="body_cel" class="text-center">
        <div class="area_cel">
            <p>ALGUM TEXTO AQUI!</p>
            <div class="btn_cel">
                ENTRAR NO GRUPO DO TELEGRAM &nbsp; <i class="fa fa-telegram fa-2x"></i>
            </div>
            <p>*Link 100% seguro!</p>
        </div>
    </section>

</div>

<?php get_footer(); ?>