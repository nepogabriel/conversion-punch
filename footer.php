<footer>
    <div class="footer_up">
        FALTA AQUI
    </div>

    <div class="footer_down">
        <div class="container">
            <p><strong><?php bloginfo('name'); ?></strong> | &copy; Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<script class="text/javascript">
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

<?php wp_footer(); ?>

<style type="text/css">
/* HEADER */
.top_header {
    background-color: <?php echo get_theme_mod('gb_linetop'); ?>;
}
.banner {
    background-image: <?php header_image(); ?>;
}

.barcta {
    background-color: <?php echo get_theme_mod('gb_barcta'); ?>;
    color: <?php echo get_theme_mod('gb_barcta_text'); ?>;
}

.barcta:hover {
    background-color: <?php echo get_theme_mod('gb_barcta_hover'); ?>;
    color: <?php echo get_theme_mod('gb_barcta_text_hover'); ?>;
}

.barcta .cta button {
    color: <?php echo get_theme_mod('gb_barcta_button_text'); ?>;
    background-color: <?php echo get_theme_mod('gb_barcta_button'); ?>;
}

.barcta:hover .cta button {
    color: <?php echo get_theme_mod('gb_barcta_button_text_hover'); ?>;
    background-color: <?php echo get_theme_mod('gb_barcta_button_hover'); ?>;
}

/* LOOP DE POSTS */
.post_title a {
    color: <?php echo get_theme_mod('gb_titlepost'); ?>;
}
.post_button {
    background-color: <?php echo get_theme_mod('gb_button'); ?>;
}
.loadmoreButton {
    color: <?php echo get_theme_mod('gb_pagination'); ?>;
}
.loadmoreButton:hover {
    border: 2px solid <?php echo get_theme_mod('gb_pagination_hover'); ?>;
}

/*FOOTER*/
.footer_up {
    background-color: <?php echo get_theme_mod('gb_footerup'); ?>;
}
.footer_down {
    background-color: <?php echo get_theme_mod('gb_footerdown'); ?>;
    color: <?php echo get_theme_mod('gb_footerdown_text'); ?>;
}

.footer_down:hover {
    background-color: <?php echo get_theme_mod('gb_footerdown_hover'); ?>;
    color: <?php echo get_theme_mod('gb_footerdown_text_hover'); ?>;
}

</style>

</body>
</html>