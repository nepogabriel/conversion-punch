<div class="col-sm-3 sidebar">
    <sidebar>

        <?php get_search_form(); ?>

        <?php
            if(is_active_sidebar('gc_sidebar')) {
                dynamic_sidebar('gc_sidebar');
            }
        ?>
    </sidebar>
</div>