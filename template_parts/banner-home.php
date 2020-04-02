<section>
    <div class="banner">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-5 d-flex align-items-center">
                    <?php if(get_theme_mod('gc_email_img')): ?>
                        
                        <img src="<?php echo get_theme_mod('gc_email_img'); ?>" class="hero-image mx-auto d-block">

                    <?php else: ?>

                        <img src="<?php echo get_template_directory_uri().'/assets/img/ebook.png' ?>" class="hero-image mx-auto d-block">
                    
                    <?php endif; ?>
                </div>

                <div class="col-sm-7">
                    <h2> <?php echo get_theme_mod('gc_email_text'); ?> </h2>
                    
                    <div class="optin">
                    <?php echo get_theme_mod('gc_email_text2'); ?>

                        <!--<form method="POST" action="">
                            <input type="hidden" name="u" value="25"/>
                            <input type="hidden" name="f" value="25"/>
                            <input type="hidden" name="s"/>
                            <input type="hidden" name="c" value="0"/>
                            <input type="hidden" name="m" value="0"/>
                            <input type="hidden" name="act" value="sub"/>
                            <input type="hidden" name="v" value="2"/>

                            <input class="optin_email" type="email" name="email" placeholder="Digite seu melhor e-mail aqui..." required/>

                            <input class="optin_btn" type="submit" value="Cadastrar"/>
                        </form>
                        
                         Ñ SEI SE ESTÁ FUNCIONANDO, TESTAR ONLINE 
                        <?php //if(get_heme_mod('gc_email_home')): ?>
                            <form method="POST" action="enviar-email.php">
                                <input class="optin_email" type="email" name="email" placeholder="Digite seu melhor e-mail aqui..." required/>
                                <input class="optin_btn" type="submit" value="Cadastrar"/>
                            <form>

                            <div class="form-row">
                                <div class="input-group input-group-append col">
                                    <input class="form-control border border-color2" type="text" id="inputEmail" placeholder="Digite seu melhor e-mail...">
                                    <div class="input-group-append">
                                        <button class="btn btn-color2" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </div>-->
                        <?php //endif; ?>

                    </div>

                    <p><?php echo get_theme_mod('gc_email_iconobs'); ?>  <?php echo get_theme_mod('gc_email_textobs'); ?></p>

                </div>
            </div>
        </div>
    </div>
</section>