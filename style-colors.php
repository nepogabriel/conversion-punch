<style type="text/css">
/* POSSIVEL COR PARA O TEMPLATE: #bc0d3c #1f1f1f;*/
/* HEADER */
.top_header {
    background-color: <?php echo get_theme_mod('gc_linetop'); ?>;
}

/*.menuarea nav li a {
    text-decoration-color: <?php // echo get_theme_mod('gc_menu'); ?>;
    color: <?php // echo get_theme_mod('gc_menu'); ?>;
}*/
/* MENU */
.navbar-light .navbar-nav .nav-link  {
    color: <?php echo get_theme_mod('gc_menu'); ?>;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show>.nav-link {
    color: <?php echo get_theme_mod('gc_menu_hover'); ?>;
    border-bottom: 2px solid <?php echo get_theme_mod('gc_menu'); ?>;
}

.dropdown-item {
    color: <?php echo get_theme_mod('gc_menu'); ?>;
}

.dropdown-item:hover::after {
    content: '';
    display: block;
    width: 30px;
    border-top: 2px solid <?php echo get_theme_mod('gc_menu_hover'); ?>;
}

.banner {
    <?php if(get_theme_mod('gc_emailtop_bg')): ?>

        background-image: url('<?php echo get_theme_mod('gc_emailtop_bg'); ?>');

    <?php else: ?>

        background-color: <?php echo get_theme_mod('gc_cap_bg_top'); ?>;

    <?php endif; ?>
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
    border-bottom: 1px solid <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.post_info p a {
    color: <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
    text-decoration-color: <?php echo get_theme_mod('gc_titlepost'); ?>;
}

hr {
    border-top: 1px solid <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.post_button {
    color: <?php echo get_theme_mod('gc_titlepost'); ?>;
    border: 2px solid <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.post_button:hover {
    background-color: <?php echo get_theme_mod('gc_titlepost'); ?>;
    color: <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
    border: 2px solid <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
}

.pag a:hover,
.pag i:hover {
    color: <?php echo get_theme_mod('gc_bg_pagination'); ?>;
}

.pag i {
    color: <?php echo get_theme_mod('gc_pagination'); ?>;
}

.page-numbers {
    color: <?php echo get_theme_mod('gc_pagination'); ?>;
    border: 2px solid <?php echo get_theme_mod('gc_pagination'); ?>;
}

.page-numbers.current {
    color: <?php echo get_theme_mod('gc_bg_pagination'); ?>;
}

/*FORMULÁRIO DE BUSCA*/
.form-control{
    border: 1px solid <?php echo get_theme_mod('gc_form_control'); ?>;
}

.btn_search {
    background-color: <?php echo get_theme_mod('gc_form_control'); ?>;
    color: <?php echo get_theme_mod('gc_icon_search'); ?>;
}

/*SIDEBAR*/
.sidebar .widget_title {
    background-color: <?php echo get_theme_mod('gc_bg_sidebar'); ?>;
    color: <?php echo get_theme_mod('gc_sidebar_text'); ?>;
}

.sidebar .widget {
    /*border: 1px solid <?php// echo get_theme_mod('gc_bg_sidebar'); ?>;*/
}

/*COMENTÁRIOS*/
.comment-respond .submit {
    color: <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
    background-color: <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.comment-respond .submit:hover {
    color: <?php echo get_theme_mod('gc_titlepost'); ?>;
    box-shadow: 0 0px 0px 3px <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
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

.line_footer {
    border-top: 1px solid <?php echo get_theme_mod('gc_line_footer'); ?>;
}

.footer_down {
    background-color: <?php echo get_theme_mod('gc_footerdown'); ?>;
    color: <?php echo get_theme_mod('gc_footerdown_text'); ?>;
}

.footer_down:hover {
    background-color: <?php echo get_theme_mod('gc_footerdown_hover'); ?>;
    color: <?php echo get_theme_mod('gc_footerdown_text_hover'); ?>;
}

/*PAGE CONTACT*/
.wpcf7-submit {
    color: <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
    background-color: <?php echo get_theme_mod('gc_titlepost'); ?>;
}

.wpcf7-submit:hover {
    color: <?php echo get_theme_mod('gc_titlepost'); ?>;
    box-shadow: 0 0px 0px 3px <?php echo get_theme_mod('gc_cat_author_hr'); ?>;
}
</style>