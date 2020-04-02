<style type="text/css">
.list_share .item a.bg-mssg {
    background: transparent;
    background-size: auto; /* ou 'contain' */
    background-image: url('<?php bloginfo('template_directory'); ?>../assets/img/messenger-blue.png');
    background-repeat: no-repeat;
    background-position: center;
    border: 2px solid #20b9eb;
}

.list_share .item a.bg-mssg:hover {
    background: #20b9eb;
    background-image: url('<?php bloginfo('template_directory'); ?>../assets/img/messenger-white.png');
    background-repeat: no-repeat;
    background-position: center;
}
</style>

<div class="content">
    <ul class="list-social list_share">

        <!-- FACEBOOK -->
        <li class="item item-0">
            <a class="bg-face" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
        </li>

        <!-- <div class="fb-share-button" data-href="https://atitudevaliosa.com.br" data-layout="button" data-size="small">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fatitudevaliosa.com.br%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                Compartilhar
            </a>
        </div> -->

        <!-- MESSENGER -->
        <li class="item">
            <a class="bg-mssg" target="_blank" href="https://www.facebook.com/dialog/send?app_id=751979268550905&link=<?php the_permalink(); ?>%2F%23.XSX04Ui7sIw.messenger&redirect_uri=https%3A%2F%2F<?php the_permalink(); ?>%2Fmessengerredirect">
            </a>
        </li>

        <!-- WHATSAPP -->
        <li class="item">
            <a class="bg-wpp" href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-whatsapp"></i>
            </a>
        </li>
        
        <!-- TELEGRAM-->
        <li class="item">
            <a class="bg-tele" href="https://telegram.me/share/url?url=[URL]&text=[TEXTO]" id="telegram-share-btt" rel="nofollow" target="_blank"> 
                <i class="fa fa-telegram"></i>
            </a>
        </li>

        <!-- PINTEREST -->
        <li class="item">
            <a class="bg-pinte" href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" target="_blank">
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
        <!-- <li class="item">
            <a class="bg-insta" href="#link-aqui" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
        </li> -->

        <!-- TWITTER -->
        <li class="item">
            <a class="bg-tt" href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-show-count="false" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </li>

    </ul>
</div>

<script type="text/javascript">
    //Constrói a URL depois que o DOM estiver pronto
    document.addEventListener("DOMContentLoaded", function() {
        var url = encodeURIComponent(window.location.href); //url
        var title = encodeURIComponent(document.title); //título
        var telegramLink = 'https://telegram.me/share/url?url=' + <?php the_permalink(); ?> + '&text=' + <?php the_title(); ?>;
        document.getElementById("telegram-share-btt").href = telegramLink;
    }, false);
</script>