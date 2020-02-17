<form class="btn_form" role="search" method="GET" action="<?php echo home_url('/'); ?>">

    <div class="input-group input-group-append">

        <input type="search" class="form-control" placeholder="O que procura?" value="<?php echo get_search_query(); ?>" name="s"/>

        <div class="input-group-append">
            <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
        </div>

    </div>

</form>