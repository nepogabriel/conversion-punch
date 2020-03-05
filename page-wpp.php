<?php
/* Template name: 1-Captura Telegram */
get_header();
?>

<style type="text/css">
body {
    background: linear-gradient(to right,#34af23,#32afed);
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
    background-color: #34af23;
    color: #fff;
    font-weight: 600;
    display: inline-block;
    padding: 15px;
    border-radius: 5px;
}

.btn_cel:hover {
    color: #34af23;
    box-shadow: 0 0 0 3px #34af23;
    background: transparent;
}
</style>

<div class="container">

    <section id="cap_cel" class="text-center">
        <?php if(has_custom_logo()) { the_custom_logo(); } ?>

        <h1 class="title_cel"><strong> Título da Página de Captura Aqui! </strong></h1>
        
        <p class="text_cel">Texto para fazer uma chamada para ação aqui</p>
    </section>

    <section id="body_cel" class="text-center">
        <div class="area_cel">
            <p class="text_cta"> teste aqui ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI! ALGUM TEXTO AQUI!</p>
            <div class="btn_cel">
                ENTRAR NO GRUPO DO TELEGRAM &nbsp; <i class="fa fa-whatsapp fa-lg"></i>
            </div>
            <p class="text_obs">*Link 100% seguro!</p>
        </div>
    </section>

</div>

<?php get_footer(); ?>  