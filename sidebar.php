<div class="col-sm-3 sidebar">
    <sidebar>

        <?php dynamic_sidebar('Busca'); ?>

        <?php
            if(is_active_sidebar('gc_sidebar')) {
                dynamic_sidebar('gc_sidebar');
            }
        ?>
    </sidebar>
</div>