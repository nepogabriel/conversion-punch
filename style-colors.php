<style type="text/css">
/* HEADER */
.top_header {
    background-color: <?php echo get_theme_mod('gc_linetop'); ?>;
}

.menuarea nav li a {
    text-decoration-color: <?php echo get_theme_mod('gc_menu_decoration'); ?>;
    color: <?php echo get_theme_mod('gc_menu'); ?>;
}

.banner {
    background-image: url('<?php echo get_theme_mod('gc_emailtop_bg'); ?>');
}

.barcta {
    background-color: <?php echo get_theme_mod('gc_barcta'); ?>;
    color: <?php echo get_theme_mod('gc_barcta_text'); ?>;
}

.barcta:hover {
    background-color: <?php echo get_theme_mod('gc_barcta_hover'); ?>;
    color: <?php echo get_theme_mod('gc_barcta_text_hover'); ?>;
}

.barcta .cta button {
    color: <?php echo get_theme_mod('gc_barcta_button_text'); ?>;
    background-color: <?php echo get_theme_mod('gc_barcta_button'); ?>;
}

.barcta:hover .cta button {
    color: <?php echo get_theme_mod('gc_barcta_button_text_hover'); ?>;
    background-color: <?php echo get_theme_mod('gc_barcta_button_hover'); ?>;
}

/* LOOP DE POSTS */
.post h6 {
    border: 2px solid <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.post h6 a {
    color: <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
}

.post_title a {
    color: <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.post_title a:hover {
    border-bottom: 1px solid <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
}

.post_info p a {
    color: <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
    text-decoration-color: <?php echo get_theme_mod('gc_titlepost'); ?>;
}

hr {
    border-top: 1px solid <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
}

.post_button {
    color: <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
    background-color: <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.post_button:hover {
    border: 2px solid <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.page-numbers {
    color: <?php echo get_theme_mod('gc_pagination'); ?>;
    border: 2px solid <?php echo get_theme_mod('gc_pagination'); ?>;
}

.page-numbers.current {
    background-color: <?php echo get_theme_mod('gc_bg_pagination'); ?>;
}

.pag a:hover {
    color: <?php echo get_theme_mod('gc_bg_pagination'); ?>;
}

.pag i {
    color: <?php echo get_theme_mod('gc_pagination'); ?>;
}

.pag i:hover {
    color: <?php echo get_theme_mod('gc_bg_pagination'); ?>;
}

/*SIDEBAR*/
.sidebar .widget_title {
    background-color: <?php echo get_theme_mod('gc_bg_sidebar'); ?>;
    color: <?php echo get_theme_mod('gc_sidebar_text'); ?>;
}

.sidebar .widget {
    border: 1px solid <?php echo get_theme_mod('gc_bg_sidebar'); ?>;
}

/*FOOTER*/
.footer_up {
    background-color: <?php echo get_theme_mod('gc_footerup'); ?>;
}

.footer_widget .widget_title {
    color: <?php echo get_theme_mod('gc_footerup_title'); ?>;
}

.footer_widget .widget_title::after {
    background-color: <?php echo get_theme_mod('gc_footerup_title'); ?>;
}

.footer_widget a,
.footer_widget p {
    color: <?php echo get_theme_mod('gc_footerup_text'); ?>;
}

.footer_down {
    background-color: <?php echo get_theme_mod('gc_footerdown'); ?>;
    color: <?php echo get_theme_mod('gc_footerdown_text'); ?>;
}

.footer_down:hover {
    background-color: <?php echo get_theme_mod('gc_footerdown_hover'); ?>;
    color: <?php echo get_theme_mod('gc_footerdown_text_hover'); ?>;
}
</style>