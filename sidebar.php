<div class="col-12 col-lg-3 sidebar">
    <sidebar>

        <?php
            if(is_active_sidebar('gc_searchform')) {
                dynamic_sidebar('gc_searchform');
            }

            if(is_active_sidebar('gc_sidebar')) {
                dynamic_sidebar('gc_sidebar');
            }
        ?>
    </sidebar>
</div>