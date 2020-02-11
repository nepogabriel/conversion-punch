<footer>
    <div class="footer_up">
        <div class="footer_widget">
            <?php
                if(is_active_sidebar('gc_footersidebar')) {
                    dynamic_sidebar('gc_footersidebar');
                }
            ?>
        </div>
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

<?php require get_template_directory().'/style-colors.php'; ?>

</body>
</html>