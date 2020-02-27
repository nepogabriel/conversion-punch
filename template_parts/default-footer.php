<footer>
    <div class="footer_up">
        <div class="footer_widget container">
            <div class="row">

                <div class="col-12 col-md-3">
                    <?php
                        if(is_active_sidebar('gc_footer1')) {
                            dynamic_sidebar('gc_footer1');
                        }
                    ?>
                </div>

                <div class="col-12 col-md-3">
                    <?php
                        if(is_active_sidebar('gc_footer2')) {
                            dynamic_sidebar('gc_footer2');
                        }
                    ?>
                </div>

                <div class="col-12 col-md-3">
                    <?php
                        if(is_active_sidebar('gc_footer3')) {
                            dynamic_sidebar('gc_footer3');
                        }
                    ?>
                </div>

                <div class="col-12 col-md-3">
                    <?php
                        if(is_active_sidebar('gc_footer4')) {
                            dynamic_sidebar('gc_footer4');
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>

    <hr class="line_footer">

    <div class="footer_down">
        <div class="container">
            <p><strong><?php bloginfo('name'); ?></strong> | &copy; Todos os direitos reservados.</p>
        </div>
    </div>
</footer>