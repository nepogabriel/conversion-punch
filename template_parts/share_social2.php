<div class="content">
    <ul class="list-social list_share">

        <!-- FACEBOOK -->
        <li class="item item-0">
            <a class="bg-face" href="https://www.facebook.com/dialog/share?app_id=933128757083018&display=popup&href=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
        </li>

        <!-- MESSENGER -->
        <li class="item">
            <a class="bg-mssg" onmousemove="messengerWhite()" onmouseout="messengerBlue()" href="https://www.facebook.com/dialog/send?app_id=751979268550905&link=<?php the_permalink(); ?>%2F%23.XSX04Ui7sIw.messenger&redirect_uri=https%3A%2F%2Fwww.rockcontent.com%2Fmessengerredirect" target="_blank">
                <img class="img-fluid" id="messenger" src="<?php echo get_template_directory_uri().'../assets/img/messenger-blue.png' ?>" alt="Ícone do Messenger Azul"> 
            </a>
        </li>

        <!-- WHATSAPP -->
        <li class="item">
            <a class="bg-wpp" href="https://api.whatsapp.com/send?text=Artigo <?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-whatsapp"></i>
            </a>
        </li>

        <!-- TELEGRAM -->
        <li class="item">
            <a class="bg-tele" href="#link-aqui" target="_blank"> 
                <i class="fa fa-telegram"></i>
            </a>
        </li>

        <!-- PINTEREST -->
        <li class="item">
            <a class="bg-pinte" href="#link-aqui" target="_blank">
                <i class="fa fa-pinterest"></i>
            </a>
        </li>

        <!-- LINKEDIN -->
        <li class="item">
            <a class="bg-lkd" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
        </li>

        <!-- INSTAGRAM -->
        <li class="item">
            <a class="bg-insta" href="#link-aqui" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
        </li>

        <!-- TWITTER -->
        <li class="item">
            <a class="bg-tt" href="#link-aqui" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </li>

    </ul>
</div>

<script type="text/javascript">
    function messengerWhite() {
        document.getElementById("messenger").src = "<?php echo get_template_directory_uri().'../assets/img/messenger-white.png' ?>";
    }
    
    function messengerBlue() {
        document.getElementById("messenger").src = "<?php echo get_template_directory_uri().'../assets/img/messenger-blue.png' ?>";
    }
</script>