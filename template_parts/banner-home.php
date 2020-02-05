<section>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/heroimage.png'; ?>" class="hero-image">
                </div>

                <div class="col-sm-7">
                    <h2>FALTA AQUI (ter um hover nos strong) | Esse <strong>Blog</strong> é para você que quer <strong>aprender a programar do zero</strong> em pouco tempo!</h2>
                    
                    <div class="optin">
                        Se você quer receber <strong>conteúdos exclusivos</strong><br>
                        que eu só mando por e-mail, cadastre-se na lista VIP: (Ter hover inverso no botão)

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
                        </form>-->
                        
                        <!-- Ñ SEI SE ESTÁ FUNCIONANDO, TESTAR ONLINE -->
                        <?php //if(get_heme_mod('gb_email_home')): ?>
                            <form method="POST" action="enviar-email.php">
                                <input class="optin_email" type="email" name="email" placeholder="Digite seu melhor e-mail aqui..." required/>
                                <input class="optin_btn" type="submit" value="Cadastrar"/>
                            <form>
                        <?php //endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>